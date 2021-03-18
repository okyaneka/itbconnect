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
        style="background-image: url('{{ url('/images/Roland Andira Wala Teknik Mesin 2005 Commissioner at PT SAS Andalan Sinergi.jpg') }}')">
      </div>
      <div class="mr-auto space-y-2">
        <div class="text-xl font-bold">{{ $username ?? 'Roland Andira Wala' }}</div>
        <div>{{ $company ?? 'Commissioner at PT. SAS Andalan Sinergi' }}</div>
        <div>{{ $a ?? '2005 - Teknik Mesin' }}</div>
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
    <div x-data="{ active: 1 }">
      <div class="flex gap-2">
        <div @click="active = 1" :class="{ 'bg-white': active == 1, 'bg-gray-200': active != 1 }"
          class="uppercase flex items-center text-center cursor-pointer py-2 px-4">Profil</div>
        <div @click="active = 2" :class="{ 'bg-white': active == 2, 'bg-gray-200': active != 2 }"
          class="uppercase flex items-center text-center cursor-pointer py-2 px-4">Pengalaman</div>
        <div @click="active = 3" :class="{ 'bg-white': active == 3, 'bg-gray-200': active != 3 }"
          class="uppercase flex items-center text-center cursor-pointer py-2 px-4">Pendidikan</div>
        <div @click="active = 4" :class="{ 'bg-white': active == 4, 'bg-gray-200': active != 4 }"
          class="uppercase flex items-center text-center cursor-pointer py-2 px-4">Minat & Organisasi</div>
        <div @click="active = 5" :class="{ 'bg-white': active == 5, 'bg-gray-200': active != 5 }"
          class="uppercase flex items-center text-center cursor-pointer py-2 px-4">Bisnis & Profesi</div>
      </div>

      <div class="bg-white py-8 px-4">
        <div x-show="active == 1">
          <table class="ml-8">
            <tbody>
              <tr>
                <td class="align-top font-bold text-right ">Nama</td>
                <td class="align-top px-2">:</td>
                <td class="align-top">Roland Andira Wala</td>
              </tr>
              <tr>
                <td class="align-top font-bold text-right">Alamat</td>
                <td class="align-top px-2">:</td>
                <td class="align-top">Raffles Hills E3/2</td>
              </tr>
              <tr>
                <td class="align-top font-bold text-right">Email</td>
                <td class="align-top px-2">:</td>
                <td class="align-top">
                  roland.wala@gmail.com <br>
                  roland.wala@sas-aero.id<br>
                  wala.roland@saftaferti.com
                </td>
              </tr>
              <tr>
                <td class="align-top font-bold text-right">No. Telepon</td>
                <td class="align-top px-2">:</td>
                <td class="align-top">0811228545</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div x-show="active == 2">
          <div class="flex flex-col space-y-4">
            @foreach ($experiences as $exp)
            <div class="rounded shadow p-4">
              <div class="font-bold">{{ $exp->profession }}</div>
              <div>{{ $exp->company }}</div>
              <div>{{ $exp->start_year . (empty($exp->end_year) ? '' : ' - '.$exp->end_year) }}</div>
            </div>
            @endforeach
          </div>
        </div>

        <div x-show="active == 3">
          <div class="flex flex-col space-y-4">
            @foreach ($educations as $ed)
            <div class="rounded shadow p-4">
              <div class="font-bold">{{ $ed->school }}</div>
              @if (!empty($ed->grade.$ed->major))
              <div>
                {{ (empty($ed->grade) ? '' : $ed->grade) . (empty($ed->major) ? '' : empty($ed->grade) ? $ed->major : ' - '.$ed->major) }}
              </div>
              @endif
              <div>{{ $ed->entry_year }} - {{ $ed->grad_year }}</div>
            </div>
            @endforeach
          </div>
        </div>

        <div x-show="active == 4">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="flex space-x-4 space-y-4 items-center text-lg">
              <div class="h-24 w-24 bg-center bg-cover" style="background-image: url(/images/HMM-ITB.png);"></div>
              <div class="font-bold">HMM ITB</div>
            </div>
          </div>
        </div>

        <div x-show="active == 5">
          <div x-data="{a: 0}">
            <div class="flex space-x-4 mb-4">
              @for ($i = 0; $i < 1; $i++) <div class="flex flex-col cursor-pointer" @click="a = {{ $i }}"
                :class="a == {{ $i }} ? '' : 'opacity-50'">
                <div class="text-lg uppercase">PT. SAS AERO SISHAN</div>
                <div class="w-full py-1 bg-primary"></div>
            </div>
            @endfor
          </div>

          @for ($j = 0; $j < 1; $j++) <div x-show="a == {{ $j }}" class="flex flex-col space-y-8">
            <img class="object-cover h-96 w-full block" src="{{ asset('/images/slide-'.($j + 1).'.jpg') }}" alt="">

            <div>
              <div class="uppercase font-bold">{{ __('Field of business') }}</div>
              <div class="py-1 bg-primary opacity-50 my-2"></div>
              <div class="flex flex-wrap space-x-4 space-y-4">
                <div
                  class="transition duration-300 cursor-default text-indigo-500 background-transparent hover:text-white hover:bg-indigo-500 hover:border-none font-bold uppercase px-3 py-1 border border-current justify-center items-center flex focus:border">
                  <div class="mt-1">Teknologi Pertahanan</div>
                </div>
              </div>
            </div>

            <div>
              <div class="uppercase font-bold">{{ __('Business information') }}</div>
              <div class="py-1 bg-primary opacity-50 my-2"></div>
              <div class="mt-2 space-y-2">
                <p class="font-bold">About us</p>
                <p>
                  PT. SAS Aero Sishan (SAS) is a company developing defense systems and technologies. SAS combines
                  expertise from founders’ expertise, previous experience, and newly recruited aerospace experts to
                  tackle challenges in Indonesian aerospace & defense industry. SAS’s roots dates back to 2011 when
                  our founders built business and technical foundations in process and manufacturing industry</p>
                <p class="font-bold">Vision</p>
                <p>
                  To be a leading, reputable manufacturer and prime contractor of advanced weapons, systems, and
                  platforms program for military and coast guard in South East Asia
                </p>
                <p class="font-bold">Mission</p>
                <p>To develop, manufacture, and supply advanced weapons, systems, and platforms.</p>
              </div>
            </div>

            <div>
              <div class="uppercase font-bold">{{ __('Produk / Layanan') }}</div>
              <div class="py-1 bg-primary opacity-50 my-2"></div>
              <div class="flex space-x-4 space-y-4 flex-wrap">
                @foreach ($products as $product)
                <div class="flex flex-col w-48 items-center space-y-2">
                  <img class="object-cover w-full h-36 block" src="{{ url('/images/'.$product->img_src) }}" alt="">
                  <div>{{ $product->name }}</div>
                </div>
                @endforeach
              </div>
            </div>

            <div>
              <div class="uppercase font-bold">{{ __('Portofolio') }}</div>
              <div class="py-1 bg-primary opacity-50 my-2"></div>
              <div class="flex space-x-4 space-y-4 flex-wrap">
                @foreach ($portofolios as $img_src)
                <div class="w-48 h-36 flex flex-col items-center space-y-2">
                  <img class="object-cover h-full w-full block" src="{{ asset('/images/'.$img_src) }}"
                    alt="">
                </div>
                @endforeach
              </div>
            </div>
        </div>
        @endfor
      </div>
    </div>
  </div>
  </div>
</x-app-layout>