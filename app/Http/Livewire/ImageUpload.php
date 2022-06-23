<?php
	
	namespace App\Http\Livewire;
	
	use Illuminate\Http\UploadedFile;
	use Illuminate\Support\Str;
	use Livewire\Component;
	use Livewire\WithFileUploads;
	
	class ImageUpload extends Component {
		use WithFileUploads;
		
		public $media;
		public $optimizedImage = '';
		
		public function mount() {
			$this->media = 'https://res.cloudinary.com/dgrpkngjn/image/upload/v1655979457/cloudinary-speed/ypmrd0zhbyj0emfhthdm.jpg';
			$this->optimizedImage = 'https://res.cloudinary.com/dgrpkngjn/image/upload/w_700,h_800,c_scale/v1655979445/cloudinary-speed/qcmetreekzyjc1dk2n8t.jpg';
		}
		
		public function upload() {
			/*First we validate the input from the user*/
			$data = $this->validate([
				'media' => [
					'required',
					'image',
					'mimes:jpeg,jpg,png',
				],
			]);
			
			/** @var UploadedFile $media */
			if (empty($data['media'])) {
				unset($data['media']);
			} else {
				/*We will now set the transformations required to optimize the images
				 based on recommended optimization solutions*/
				$cloud_name = env('CLOUDINARY_CLOUD_NAME', 'dgrpkngjn');
				$folder = 'cloudinary-speed';
				$media = $data['media'];
				$width = '400';
				$height = '600';
				$quality = 'auto';
				$fetch = 'auto';
				$crop = 'scale';
				
				$optimal = cloudinary()->upload($media->getRealPath(), [
					'folder'         => $folder,
					'transformation' => [
						'width'        => $width,
						'height'       => $height,
						'quality'      => $quality,
						'fetch_format' => $fetch,
						'crop'         => $crop
					]
				])->getSecurePath();
				
				$non_optimal = cloudinary()->upload($media->getRealPath(), [
					'folder' => $folder
				])->getSecurePath();
				
				// Optimized image fetching
				/* Fetching an optimized image applying the transformations we
				specified which will compress, resize and optimize our images
				for a speedy web application */
				$slice = Str::afterLast($optimal, '/');
				$optimized = "https://res.cloudinary.com/{$cloud_name}/image/upload/w_{$width},h_{$height},c_{$crop}/{$folder}/{$slice}";
				
				$this->optimizedImage = $optimized;
				
				// Non optimized version for comparison
				$this->media = $non_optimal;
			}
			
			session()->flash('message', 'Media file optimized successfully!');
		}
		
		public function render() {
			return view('livewire.image-upload');
		}
	}
