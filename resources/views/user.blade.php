<x-app-layout>
  <div class="w-full h-96">
    <div class="relative flex h-full">
      <div class="w-full h-full bg-pink-500 text-white flex items-center bg-center bg-cover"
        style="background-image: url(/images/slide-2.jpg)"></div>
    </div>
  </div>

  <div class="w-full flex justify-center bg-white shadow-md">
    <div class="container p-4 flex items-center">
      <div
        class="rounded-full mr-4 relative -top-16 flex-none md:h-32 md:w-32 h-20 w-20 bg-primary bg-center bg-cover border-4 border-primary"
        style="background-image: url(/images/slide-3.jpg)"></div>
      <div class="mr-auto space-y-2">
        <div class="text-xl font-bold">{{ $username }}</div>
        <div>{{ $company ?? 'CEO PT Maju Makmur' }}</div>
        <div>{{ $a ?? 'Angkatan - Jurusan' }}</div>
      </div>
      <div class="flex space-x-4">
        <a href="#" class="rounded-full text-white text-3xl flex items-center justify-center md:h-16 md:w-16 h-20 w-20"
          style="background-color: #1877f2">
          <div class="ri-facebook-fill"></div>
        </a>
        <a href="#" class="rounded-full text-white text-3xl flex items-center justify-center md:h-16 md:w-16 h-20 w-20"
          style="background-color: #c32aa3">
          <div class="ri-instagram-fill"></div>
        </a>
        <a href="#" class="rounded-full text-white text-3xl flex items-center justify-center md:h-16 md:w-16 h-20 w-20"
          style="background-color: #1da1f2">
          <div class="ri-twitter-fill"></div>
        </a>
        <a href="#" class="rounded-full text-white text-3xl flex items-center justify-center md:h-16 md:w-16 h-20 w-20"
          style="background-color: #0a66c2">
          <div class="ri-linkedin-fill"></div>
        </a>
      </div>
    </div>
  </div>

  <div class="container my-8 px-4 space-y-8">
    <div x-data="{ active: 5 }">
      <div class="flex gap-2">
        <div @click="active = 1" :class="{ 'bg-white': active == 1, 'bg-gray-200': active != 1 }"
          class="uppercase cursor-pointer py-2 px-4">Profil</div>
        <div @click="active = 2" :class="{ 'bg-white': active == 2, 'bg-gray-200': active != 2 }"
          class="uppercase cursor-pointer py-2 px-4">Pengalaman</div>
        <div @click="active = 3" :class="{ 'bg-white': active == 3, 'bg-gray-200': active != 3 }"
          class="uppercase cursor-pointer py-2 px-4">Pendidikan</div>
        <div @click="active = 4" :class="{ 'bg-white': active == 4, 'bg-gray-200': active != 4 }"
          class="uppercase cursor-pointer py-2 px-4">Minat & Organisasi</div>
        <div @click="active = 5" :class="{ 'bg-white': active == 5, 'bg-gray-200': active != 5 }"
          class="uppercase cursor-pointer py-2 px-4">Bisnis & Profesi</div>
      </div>

      <div class="bg-white py-8 px-4">
        <div x-show="active == 1">
          <table class="ml-8">
            <tbody>
              <tr>
                <td class="font-bold text-right ">Nama</td>
                <td class="px-2">:</td>
                <td>John Doe</td>
              </tr>
              <tr>
                <td class="font-bold text-right">Alamat</td>
                <td class="px-2">:</td>
                <td>John Doe Streets</td>
              </tr>
              <tr>
                <td class="font-bold text-right">Email</td>
                <td class="px-2">:</td>
                <td>johndoe@gmail.com</td>
              </tr>
              <tr>
                <td class="font-bold text-right">No. Telepon</td>
                <td class="px-2">:</td>
                <td>+123</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div x-show="active == 2">
          <div class="flex flex-col space-y-4">
            @for ($i = 0; $i < 3; $i++) <div class="rounded shadow p-4">
              <div class="font-bold">Chied Executive Officer</div>
              <div>PT Maju Makmur</div>
              <div>2017 - Sekarang</div>
              <div>Jakarta</div>
          </div>
          @endfor
        </div>
      </div>

      <div x-show="active == 3">
        <div class="flex flex-col space-y-4">
          <div class="rounded shadow p-4">
            <div class="font-bold">Institute Teknologi Bandung</div>
            <div>S2 - Teknik Sipil</div>
            <div>2016 - 2018</div>
          </div>
          <div class="rounded shadow p-4">
            <div class="font-bold">Institute Teknologi Bandung</div>
            <div>S1 - Teknik Sipil</div>
            <div>2012 - 2016</div>
          </div>
        </div>
      </div>

      <div x-show="active == 4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
          <div class="flex space-x-4 items-center text-lg">
            <div class="h-24 w-24 bg-center bg-cover" style="background-image: url(/images/slide-3.jpg);"></div>
            <div class="font-bold">Unit Basket Ganesha</div>
          </div>
          <div class="flex space-x-4 items-center text-lg">
            <div class="h-24 w-24 bg-center bg-cover" style="background-image: url(/images/slide-3.jpg);"></div>
            <div class="font-bold">Lingkar Sastra (LS)</div>
          </div>
          <div class="flex space-x-4 items-center text-lg">
            <div class="h-24 w-24 bg-center bg-cover" style="background-image: url(/images/slide-3.jpg);"></div>
            <div class="font-bold">ITB Jazz</div>
          </div>
          <div class="flex space-x-4 items-center text-lg">
            <div class="h-24 w-24 bg-center bg-cover" style="background-image: url(/images/slide-3.jpg);"></div>
            <div class="font-bold">ITB Student Orchestra (ISO)</div>
          </div>
        </div>
      </div>

      <div x-show="active == 5">
        <div x-data="{a: 0}">
          <div class="flex space-x-4 mb-4">
            @for ($i = 0; $i < 3; $i++)
            <div class="flex flex-col cursor-pointer" @click="a = {{ $i }}" :class="a == {{ $i }} ? '' : 'opacity-50'">
              <div class="text-lg uppercase">PT MAJU MAKMUR {{ $i + 1 }}</div>
              <div class="w-full py-1 bg-primary"></div>
            </div>
            @endfor
          </div>
  
          @for ($j = 0; $j < 3; $j++)
          <div x-show="a == {{ $j }}" class="flex flex-col space-y-8">
            <img class="object-cover h-96 w-full block" src="{{ asset('/images/slide-'.($j + 1).'.jpg') }}" alt="">
  
            <div>
              <div class="uppercase font-bold">{{ __('Field of business') }}</div>
              <div class="py-1 bg-primary opacity-50 my-2"></div>
              <div class="flex flex-wrap -m-2">
                @for ($i = 0; $i < 3; $i++)
                  <x-button class="m-2" type="button" color="primary">Bisnis {{ $i + 1 }}</x-button>
                @endfor
              </div>
            </div>
            
            <div>
              <div class="uppercase font-bold">{{ __('Business information') }}</div>
              <div class="py-1 bg-primary opacity-50 my-2"></div>
              <div class="whitespace-pre-line mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam aliquam vel dolor id tristique. Sed et nulla tortor. Mauris a neque dui. Sed diam ligula, placerat in nunc quis, accumsan accumsan metus. Mauris non faucibus metus. Sed congue massa in orci ultricies, et porttitor odio bibendum. Etiam commodo leo sit amet placerat volutpat. Vivamus sodales cursus rutrum. Sed pulvinar at leo ac fringilla. Duis eget odio efficitur, convallis nunc at, porta mi. Vivamus maximus vulputate leo nec consequat. Pellentesque tincidunt eget magna id aliquet. Integer tristique ullamcorper tempus.
  
                Duis auctor nisl mi, ac venenatis magna lacinia sed. Nulla nulla mauris, facilisis vitae felis quis, malesuada ornare leo. Curabitur at porta augue. Cras egestas sed libero ac dictum. Sed dapibus nunc ac leo molestie consequat. Sed mattis, ante at commodo ullamcorper, urna nunc pulvinar metus, sit amet sagittis nisi metus at nibh. Morbi mauris risus, pretium blandit eleifend at, pellentesque a est. Vivamus nec justo id ipsum finibus finibus. Fusce nec malesuada nibh, eu interdum sapien.
                
                Ut sed diam lacus. Aenean ultricies, elit eu faucibus hendrerit, arcu mauris luctus tortor, at placerat dolor tortor non risus. Nulla id erat at felis ullamcorper accumsan. Pellentesque arcu augue, dignissim vitae neque a, malesuada lobortis velit. Aliquam erat volutpat. Pellentesque cursus ornare auctor. Fusce dignissim nibh non metus varius, quis fermentum ligula rutrum. Aenean blandit vitae lorem vitae pharetra. Aliquam ultricies ex in posuere fringilla. Aliquam luctus odio congue sapien tempus varius.
              </div>
            </div>
  
            <div>
              <div class="uppercase font-bold">{{ __('Produk / Layanan') }}</div>
              <div class="py-1 bg-primary opacity-50 my-2"></div>
              <div class="flex -m-2 flex-wrap">
                @for ($i = 0; $i < 3; $i++)
                <div class="w-48 h-36 m-2 flex flex-col items-center space-y-2">
                  <img class="object-cover h-full w-full block" src="{{ asset('/images/slide-'.($i + 1).'.jpg') }}" alt="">
                  <div>Nama Produk / Layanan</div>
                </div>
                @endfor
              </div>
            </div>
            
            <div>
              <div class="uppercase font-bold">{{ __('Portofolio') }}</div>
              <div class="py-1 bg-primary opacity-50 my-2"></div>
              <div class="flex -m-2 flex-wrap">
                @for ($i = 0; $i < 8; $i++)
                <div class="w-48 h-36 m-2 flex flex-col items-center space-y-2">
                  <img class="object-cover h-full w-full block" src="{{ asset('/images/slide-'.($i % 3 + 1).'.jpg') }}" alt="">
                </div>
                @endfor
              </div>
            </div>
          </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
</x-app-layout>