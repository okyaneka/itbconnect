<x-profile-layout>
  <x-slot name="header">
    {{ __('Ayo Beresin Bareng') }}
  </x-slot>

  <div class="flex flex-col space-y-4">
    <div class="flex">
      <x-button type="button" color="primary">{{ __('Add') }}</x-button>
    </div>

    <form action="">
      @csrf
      <div class="flex justify-between">
        <div class="flex space-x-4">
          <x-jet-input type="text" name="search" required />
          <x-button color="primary">{{ __('Search') }}</x-button>
        </div>

        <x-select>
          @for ($i = 5; $i <= 25; $i+=5) <option>{{ $i }}</option> @endfor
        </x-select>
      </div>
    </form>

    <div class="flex flex-col space-y-4">
      <table class="table-auto">
        <thead>
          <tr>
            <th class="border p-2 w-2">No</th>
            <th class="border p-2">Judul</th>
            <th class="border p-2">Published at</th>
            <th class="border p-2">Enable</th>
            <th class="border p-2 w-2"></th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i < 10; $i++) <tr>
            <td class="border p-2 text-center">{{ $i + 1 }}</td>
            <td class="border p-2">Gerakan {{ $i + 1 }}</td>
            <td class="border p-2">{{ date('M d, Y') }}</td>
            <td class="border p-2">
              <div class="flex justify-center">
                <label for="remember_me" class="flex">
                  <x-jet-checkbox class="text-primary" name="remember[{{ $i }}]" />
                  <span class="ml-2">{{ __('Tidak aktif') }}</span>
                </label>
              </div>
            </td>
            <td class="border p-2 whitespace-nowrap space-x-1">
              <x-button icon color="primary">
                <div class="ri-edit-fill"></div>
              </x-button>
              <x-button icon color="error">
                <div class="ri-close-fill"></div>
              </x-button>
            </td>
            </tr>
            @endfor
        </tbody>
      </table>

      <div class="flex justify-between items-center">
        <div>
          <p class="text-sm text-gray-700">
            Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span class="font-medium">27</span> results
          </p>
        </div>
        <div>
          <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
            <a href="#"
              class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
              <span class="sr-only">Previous</span>
              <div class="ri-arrow-left-s-line"></div>
            </a>
            <a href="#"
              class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
              1
            </a>
            <a href="#"
              class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
              2
            </a>
            <a href="#"
              class="hidden md:inline-flex relative items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
              3
            </a>
            <a href="#"
              class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
              <span class="sr-only">Next</span>
              <div class="ri-arrow-right-s-line"></div>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</x-profile-layout>