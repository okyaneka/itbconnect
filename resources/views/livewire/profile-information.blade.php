<div class="transition-all duration-300" x-data="{mainPhotoPreview: null, profilePhotoPreview: null}">
	<input type="file" class="hidden" x-ref="mainPhoto" name="main_photo" x-on:change="
      const reader = new FileReader();
      reader.onload = (e) => {
          mainPhotoPreview = e.target.result;
      };
      reader.readAsDataURL($refs.mainPhoto.files[0]);
    ">
	<input type="file" class="hidden" x-ref="profilePhoto" name="profile_photo" x-on:change="
      const reader = new FileReader();
      reader.onload = (e) => {
          profilePhotoPreview = e.target.result;
      };
      reader.readAsDataURL($refs.profilePhoto.files[0]);
    ">

	<div class="flex flex-col space-y-8">
		{{-- Informasi photo utama --}}
		<div class="flex flex-col space-y-4 pb-8 border-b">
			<div class="font-bold capitalize">{{ __('Main image') }}</div>
			<div class="flex space-x-4">
				<div x-on:click.prevent="$refs.mainPhoto.click()">
					<x-button type="button" color="primary">Upload</x-button>
				</div>
				<div x-show="mainPhotoPreview"
					x-on:click.prevent="$refs.mainPhoto.type = 'text'; $refs.mainPhoto.type = 'file'; mainPhotoPreview = ''; ">
					<x-button type="button" color="warning">Batal</x-button>
				</div>
				<div x-on:click.prevent="$refs.mainPhoto.type = 'text'; $refs.mainPhoto.type = 'file'; mainPhotoPreview = ''; ">
					<x-button type="button" color="error">Hapus</x-button>
				</div>
			</div>
			{{-- FIXME: Masih photo profil, harusnya main photo --}}
			<div x-show="!mainPhotoPreview">
				<img class="w-full h-96 object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}">
			</div>

			<div x-show="mainPhotoPreview" class="w-full h-96 bg-primary bg-cover bg-center"
				:style="'background-image: url(\'' + mainPhotoPreview + '\')'"></div>
		</div>

		{{-- Informasi profil --}}
		<div class="flex flex-col space-y-4">
			<div class="font-bold capitalize">{{ __('Profile') }}</div>

			<div class="flex">
				<label class="block w-1/4 mt-2" for="name">{{ __('Profile Picture') }}</label>
				<div class="w-3/4 flex flex-col space-y-4">

					<div>
						<div x-show="!profilePhotoPreview">
							<img class="rounded-full h-20 w-20 object-cover" src="{{ $user->profile_photo_url }}"
								alt="{{ $user->name }}">
						</div>

						<div x-show="profilePhotoPreview" class="rounded-full h-20 w-20 bg-center bg-cover"
							:style="'background-image: url(\'' + profilePhotoPreview + '\')'"></div>
					</div>

					<div class="flex space-x-4">
						<div x-on:click.prevent="$refs.profilePhoto.click()">
							<x-button type="button" color="primary">Upload</x-button>
						</div>
						<div x-show="profilePhotoPreview"
							x-on:click.prevent="$refs.profilePhoto.type = 'text'; $refs.profilePhoto.type = 'file'; profilePhotoPreview = ''; ">
							<x-button type="button" color="warning">Batal</x-button>
						</div>
						<div
							x-on:click.prevent="$refs.profilePhoto.type = 'text'; $refs.profilePhoto.type = 'file'; profilePhotoPreview = ''; ">
							<x-button type="button" color="error">Hapus</x-button>
						</div>
					</div>
				</div>
			</div>

			<div class="flex">
				<label class="block w-1/4 mt-2" for="name">{{ __('Name') }}</label>
				<x-jet-input id="name" class="block w-3/4" type="text" name="name" :value="old('name')" required />
			</div>

			<div class="flex">
				<label class="block w-1/4 mt-2" for="adress">{{ __('Address') }}</label>
				<textarea
					class="block w-3/4 resize-none border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
					id="adress" class="block mt-1 w-3/4" type="text" name="adress" rows="3"
					required>{{ old('adress') }}</textarea>
			</div>

			<div class="flex">
				<label class="block w-1/4 mt-2" for="email">{{ __('Email') }}</label>
				<x-jet-input id="email" class="block w-3/4" type="email" name="email" :value="old('email')" required />
			</div>

			<div class="flex">
				<label class="block w-1/4 mt-2" for="phone">{{ __('Phone') }}</label>
				<x-jet-input id="phone" class="block w-3/4" type="text" name="phone" :value="old('phone')" required />
			</div>

			<div class="flex">
				<label class="block w-1/4 mt-2" for="facebook">{{ __('Facebook') }}</label>
				<x-jet-input id="facebook" class="block w-3/4" type="text" name="facebook" :value="old('facebook')" required />
			</div>

			<div class="flex">
				<label class="block w-1/4 mt-2" for="instagram">{{ __('Instagram') }}</label>
				<x-jet-input id="instagram" class="block w-3/4" type="text" name="instagram" :value="old('instagram')"
					required />
			</div>

			<div class="flex">
				<label class="block w-1/4 mt-2" for="twitter">{{ __('Twitter') }}</label>
				<x-jet-input id="twitter" class="block w-3/4" type="text" name="twitter" :value="old('twitter')" required />
			</div>

			<div class="flex">
				<label class="block w-1/4 mt-2" for="linkedin">{{ __('Linkedin') }}</label>
				<x-jet-input id="linkedin" class="block w-3/4" type="text" name="linkedin" :value="old('linkedin')" required />
			</div>

			<div class="flex">
				<label class="block w-1/4 mt-2">{{ __('Change password') }}</label>
				<div class="w-3/4">
					<x-button color="primary">{{ __('Change password') }}</x-button>
				</div>
			</div>

			<div class="flex">
				<label class="block w-1/4 mt-2">{{ __('Everyone can see') }}</label>
				<div class="w-3/4 flex space-x-4 mt-2">
					<label for="show_address" class="flex">
						<x-jet-checkbox id="show_address" class="text-primary" name="show_address" />
						<span class="ml-2 text-gray-600">{{ __('Address') }}</span>
					</label>
					<label for="show_email" class="flex">
						<x-jet-checkbox id="show_email" class="text-primary" name="show_email" />
						<span class="ml-2 text-gray-600">{{ __('Email') }}</span>
					</label>
					<label for="show_phone" class="flex">
						<x-jet-checkbox id="show_phone" class="text-primary" name="show_phone" />
						<span class="ml-2 text-gray-600">{{ __('Phone') }}</span>
					</label>
				</div>
			</div>
		</div>

		{{-- Informasi pengalaman --}}
		<div class="flex flex-col space-y-4">
			<div class="font-bold capitalize">{{ __('Experience') }}</div>

			<table class="table-auto border-collapse">
				<thead>
					<tr>
						<th class="border p-2 w-2 whitespace-nowrap">No</th>
						<th class="border p-2">{{ __('Profession') }}</th>
						<th class="border p-2">{{ __('Instantion / Company') }}</th>
						<th class="border p-2">{{ __('Start Year') }}</th>
						<th class="border p-2">{{ __('End Year') }}</th>
						<th class="border p-2">{{ __('Location') }}</th>
						<th class="border p-2 w-2 whitespace-nowrap"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($experiences as $key => $exp )
					<tr>
						<td class="border p-2 text-center">{{ $key + 1 }}</td>
						<td class="border p-2">
							<x-select class="block mt-1 w-full" required wire:model="experiences.{{ $key }}.profession">
								<option disabled selected>{{ __('Please select one') }}</option>
								@for ($i = 1; $i <= 10; $i++) <option>{{ $i }}</option> @endfor
							</x-select>
						</td>
						<td class="border p-2">
							<x-jet-input class="block mt-1 w-full" type="text" required
								wire:model="experiences.{{ $key }}.instantion" />
						</td>
						<td class="border p-2">
							<x-select class="block mt-1 w-full" required wire:model="experiences.{{ $key }}.start">
								<option disabled selected>{{ __('Please select one') }}</option>
								@for ($i = date('Y'); $i >= 1920; $i--)
								<option>{{ $i }}</option>
								@endfor
							</x-select>
						</td>
						<td class="border p-2">
							<x-select class="block mt-1 w-full" required wire:model="experiences.{{ $key }}.end">
								<option disabled selected>{{ __('Please select one') }}</option>
								@for ($i = date('Y'); $i >= 1920; $i--)
								<option>{{ $i }}</option>
								@endfor
							</x-select>
						</td>
						<td class="border p-2">
							<x-jet-input class="block mt-1 w-full" type="text" required
								wire:model="experiences.{{ $key }}.location" />
						</td>
						<td class="border p-2">
							<div wire:click="deleteExp({{ $key }})">
								<x-button icon color="error">
									<div class="ri-close-fill"></div>
								</x-button>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

			<div class="flex justify-end">
				<div wire:click="addExp">
					<x-button type="button" color="primary">{{ __('Add') }}</x-button>
				</div>
			</div>
		</div>

		{{-- Informasi pendidikan --}}
		<div class="flex flex-col space-y-4">
			<div class="font-bold capitalize">{{ __('Education') }}</div>

			<table class="table-auto border-collapse">
				<thead>
					<tr>
						<th class="border p-2 w-2 whitespace-nowrap">No</th>
						<th class="border p-2">{{ __('School name') }}</th>
						<th class="border p-2">{{ __('Grade') }}</th>
						<th class="border p-2">{{ __('Major') }}</th>
						<th class="border p-2">{{ __('Start Year') }}</th>
						<th class="border p-2">{{ __('End Year') }}</th>
						<th class="border p-2 w-2 whitespace-nowrap"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($educations as $key => $exp)
					<tr>
						<td class="border p-2 text-center">{{ $key + 1 }}</td>
						<td class="border p-2">
							<x-jet-input class="block mt-1 w-full" type="text" required
								wire:model="educations.{{ $key }}.school" />
						</td>
						<td class="border p-2">
							<x-select class="block mt-1 w-full" required wire:model="educations.{{ $key }}.grade">
								<option disabled selected>{{ __('Please select one') }}</option>
								@for ($i = 1; $i <= 10; $i++) <option>{{ $i }}</option> @endfor
							</x-select>
						</td>
						<td class="border p-2">
							<x-select class="block mt-1 w-full" required wire:model="educations.{{ $key }}.major">
								<option disabled selected>{{ __('Please select one') }}</option>
								@for ($i = date('Y'); $i >= 1920; $i--)
								<option>{{ $i }}</option>
								@endfor
							</x-select>
						</td>
						<td class="border p-2">
							<x-select class="block mt-1 w-full" required wire:model="educations.{{ $key }}.start">
								<option disabled selected>{{ __('Please select one') }}</option>
								@for ($i = date('Y'); $i >= 1920; $i--)
								<option>{{ $i }}</option>
								@endfor
							</x-select>
						</td>
						<td class="border p-2">
							<x-select class="block mt-1 w-full" required wire:model="educations.{{ $key }}.end">
								<option disabled selected>{{ __('Please select one') }}</option>
								@for ($i = 1; $i <= 10; $i++) <option>{{ $i }}</option> @endfor
							</x-select>
						</td>
						<td class="border p-2">
							<div wire:click="deleteEdu({{ $key }})">
								<x-button icon color="error">
									<div class="ri-close-fill"></div>
								</x-button>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

			<div class="flex justify-end">
				<div wire:click="addEdu">
					<x-button type="button" color="primary">{{ __('Add') }}</x-button>
				</div>
			</div>
		</div>

		{{-- Informasi Minat & Organisasi --}}
		<div class="flex flex-col space-y-4">
			<div class="font-bold capitalize">{{ __('interests and organization') }}</div>

			<table class="table-auto border-collapse">
				<thead>
					<tr>
						<th class="border p-2 w-2 whitespace-nowrap">No</th>
						<th class="border p-2">{{ __('Select interests and organization') }}</th>
						<th class="border p-2 w-2 whitespace-nowrap"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($interests as $key => $int)
					<tr>
						<td class="border p-2 text-center">{{ $key + 1 }}</td>
						<td class="border p-2">
							<x-select class="block mt-1 w-full" required wire:model="interests.{{ $key }}.interest">
								<option disabled selected>{{ __('Please select one') }}</option>
								@for ($i = 1; $i <= 10; $i++) <option>{{ $i }}</option> @endfor
							</x-select>
						</td>
						<td class="border p-2">
							<div wire:click="deleteInt({{ $key }})">
								<x-button icon color="error">
									<div class="ri-close-fill"></div>
								</x-button>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

			<div class="flex justify-end">
				<div wire:click="addInt">
					<x-button type="button" color="primary">{{ __('Add') }}</x-button>
				</div>
			</div>
		</div>

		{{-- Simpan perubahan --}}
		<div class="flex flex-col space-y-4">
			<div class="font-bold capitalize">{{ __('Simpan dan perbaharui') }}</div>

			<x-jet-banner/>

			<div class="flex justify-end">
				<div wire:click="save">
					<x-button type="button" color="primary">{{ __('Save') }}</x-button>
				</div>
			</div>
		</div>
	</div>
</div>