<form action="" method="post">
  @csrf
  <div class="flex flex-col space-y-8">
    <div class="p-4 border border-primary-100 rounded">
      <div class="flex flex-col space-y-4">
        <div class="flex">
          <label class="block w-1/4 mt-2" for="name">{{ __('Name') }}</label>
          <x-jet-input id="name" class="block w-3/4" type="text" name="name" required autofocus />
        </div>
  
        <div class="flex">
          <label class="block w-1/4 mt-2" for="business">{{ __('Field of business') }}</label>
          <x-jet-input id="business" class="block w-3/4" type="text" name="business" required />
        </div>
  
        <div class="flex">
          <label class="block w-1/4 mt-2" for="description">{{ __('Business information') }}</label>
          <x-jet-input id="description" class="block w-3/4" type="text" name="description" required />
        </div>
  
        <div class="flex">
          <label class="block w-1/4 mt-2" for="description">{{ __('Product / Services') }}</label>
          <div class="w-3/4 flex flex-col space-y-4">
            <table class="table-auto">
              <thead>
                <tr>
                  <th class="border p-2">{{ __('Product / Services Name') }}</th>
                  <th class="border p-2">{{ __('Image') }}</th>
                  <th class="w-2 p-2"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($prod_or_servs as $key => $val)
                <tr>
                  <td class="border p-2">
                    <x-jet-input class="block mt-1 w-full" type="text" name="prod[{{ $key }}]" required wire:model="prod_or_servs.{{ $key }}.name" />
                  </td>
                  <td class="border p-2 flex justify-center">
                    <input type="file" name="prod_img[{{ $key }}]" class="hidden" id="prod-photo-{{ $key }}" accept="image/*" onchange="preview(this, {{ $key }})">
                    @if (empty($val['photo_preview']))
                    <div onclick="document.getElementById('prod-photo-{{ $key }}').click()">
                      <x-button type="button" color="primary">{{ __('Upload') }}</x-button>
                    </div>
                    @else
                    <div class="h-12 w-12 bg-center bg-cover cursor-pointer" onclick="document.getElementById('prod-photo-{{ $key }}').click()" style="background-image: url('{{ $val['photo_preview'] }}')"></div>
                    @endif
                  </td>
                  <td class="p-2 border">
                    <div wire:click.prevent="deleteProdOrServ({{ $key }})">
                      <x-button icon color="error">
                        <div class="ri-close-fill"></div>
                      </x-button>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
  
            <script>
              function preview(input, key) {
                if (input.files && input.files[0]) {
                  var reader = new FileReader();
                  
                  reader.onload = function(e) {
                    livewire.emit('updateProdPreview', [key, e.target.result])
                  }
                  
                  reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
              }
            </script>
  
            <div class="flex justify-end">
              <div wire:click="addProdOrServ">
                <x-button type="button" color="primary">{{ __('Add') }}</x-button>
              </div>
            </div>
          </div>
        </div>
  
        <div class="flex">
          <label class="block w-1/4 mt-2" for="description">{{ __('Portofolio') }}</label>
          <div class="w-3/4 flex flex-col space-y-4 bg-gray-500 bg-opacity-10 p-4">
            <div class="flex space-x-4">
              <x-button color="primary">Upload</x-button>
              <x-button color="primary">Hapus</x-button>
              <x-button color="primary" outlined>Select All</x-button>
            </div>
  
            <div class="flex space-x-4">
              @for ($i = 0; $i < 6; $i++)
              <div class="h-24 w-24 bg-center bg-cover" style="background-image: url(/images/slide-3.jpg);"></div>
            
              @endfor
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="flex">
      <x-button type="button" color="primary">{{ __('Tambah Profil Bisnis') }}</x-button>
    </div>

    <div class="flex flex-col space-y-4">
      <div class="font-bold capitalize">{{ __('Simpan dan perbaharui') }}</div>

      <x-jet-banner />

      <div class="flex">
        <div wire:click="save">
          <x-button type="button" color="primary">{{ __('Save') }}</x-button>
        </div>
      </div>
    </div>
  </div>
</form>