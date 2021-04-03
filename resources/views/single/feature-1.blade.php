<x-app-layout>
  <div class="md:w-3/4 w-full mx-auto space-y-8">
    <div class="container my-8 px-4 space-y-4">
      <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class="bg-white border rounded flex items-center overflow-hidden">
          <img src="{{ url('/images/features/Poster Ayo Beresin Bareng_Pompa Hidram.jpeg') }}" alt="" srcset="">
        </div>

        <div class="flex flex-col space-y-4">
          <div class="text-2xl">
            Pompa Hidram Untuk Desa Terpencil
          </div>

          <x-user-card :user="$user"></x-user-card>

          {{-- <div class="border border-primary bg-white rounded py-4 px-6 flex space-x-4">
            <div class="rounded-full flex-none h-20 w-20 bg-center bg-cover"
              style="background-image: url(/images/slide-1.jpg)"></div>
            <div class="flex flex-col">
              <div class="font-bold text-lg">Your name here</div>
              <div class="text-primary">Your company here</div>
              <div class="text-gray-500">Angkatan - jurusan</div>
            </div>
          </div> --}}

          <div>Puluhan ribu warga desa terpencil di Jawa Barat masih kesulitan mendapatkan akses air bersih. Pompa
            Hidram menjadi solusi untuk mendapatkan air di daerah terpencil khususnya yang kesulitan dengan akses
            listrik. Alumni ITB bisa membantu memperbanyak desa target bantuan pompa hidram, dengan berdonasi melalui
            link dibawah. Atau turut menjadi relawan pendamping desa target bantuan. <b>Barengan pasti beres!</b></div>

          <x-button href="#" class="text-center" color="primary">#AyoBeresinBareng</x-button>
        </div>
      </div>

      <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <a href="#"
          class="transition duration-300  text-indigo-500 background-transparent hover:text-white hover:bg-indigo-500 hover:border-none font-bold uppercase px-3 py-1 border border-current justify-center items-center flex focus:border"><i
            class="ri-facebook-fill mr-2"></i>
          <div class="mt-1">Facebook</div>
        </a>
        <a href="#"
          class="transition duration-300  text-blue-400 background-transparent hover:text-white hover:bg-blue-400 hover:border-none font-bold uppercase px-3 py-1 border border-current justify-center items-center flex focus:border"><i
            class="ri-twitter-fill mr-2"></i>
          <div class="mt-1">Twitter</div>
        </a>
        <a href="#"
          class="transition duration-300  text-pink-700 background-transparent hover:text-white hover:bg-pink-700 hover:border-none font-bold uppercase px-3 py-1 border border-current justify-center items-center flex focus:border"><i
            class="ri-instagram-line mr-2"></i>
          <div class="mt-1">Instagram</div>
        </a>
        <a href="#"
          class="transition duration-300  text-blue-800 background-transparent hover:text-white hover:bg-blue-800 hover:border-none font-bold uppercase px-3 py-1 border border-current justify-center items-center flex focus:border"><i
            class="ri-linkedin-fill mr-2"></i>
          <div class="mt-1">Linkedin</div>
        </a>
      </div>
      <x-section>
        <x-slot name="title">Story</x-slot>

        <div class="space-y-4">
          <div class="bg-white overflow-hidden border rounded flex items-center">
            <img class="w-full" src="{{ url('images/foto_story_pompa hidram.jpeg') }}" alt="" srcset="">
          </div>
          <p>"Berkat Bantuan Pompa Hidram, Warga Desa Mekarmukti Sumedang Tak Perlu Naik Turun Bukit Untuk Dapatkan Air
            Bersih" </p>
          <p>Sebanyak 750 KK Warga Desa Mekarmukti, Kecamatan Buahdua, Kabupaten Sumedang xelama ini harus harus turun
            ke sungai berjarak 300 meter, mendaki tebing setinggi 30 meter, untuk sampai ke bibir sungai atau sumber
            mata air, agar bisa mendapatkan air bersih. </p>
          <p>Adanya bantuan pompa hidram dari mantan Sekjen IA ITB dan Calon Ketua Ikatan Alumni ITB, Gembong
            Primadjaja, warga Desa Mekarmukti tak perlu lagi naik turun tebing. Air bersih didistribusikan oleh pompa
            hidram ke bak reservoir yang berada di tengah-tengah kampung. </p>
          <p>Kegiatan syukuran dan acara peresmian atas terbangunnya pompa hidram dilakukan bersama warga Desa
            Mekarmukti, Sumedang, yang dihadiri langsung Gembong Primadjaja, Camat Buah Dua, Kepala Desa Mekar Mukti,
            dan Direktur PT.Buatan Guna Indonesia, di Aula Kantor Desa Mekar Mukti dan lokasi tempat Pompa Hidram di
            bangun, Kamis (11/03/2021). </p>
          <p>Gembong mengatakan, "Ada banyak masalah yang dihadapi bangsa ini. Sudah menjadi tugas kita sebagai alumni
            ITB untuk bersatu membantu pemerintah mencari solusi dari berbagai masalah, sehingga keberadaan kita dapat
            memberikan manfaat bagi masyarakat". </p>
          <p>Pembangunan pompa hidram ini bukan yang pertama, Gembong Primadjaja dan Kelompok Studi Sosioteknologi
            Himpunan Mahasiswa Mesin ITB pernah membuat dan memasang pompa hidram di Desa Cilogang Sumedang, 32 tahun
            lalu ditahun 1987. Kini, proyek tersebut dilanjutkan kembali.</p>
          <p>Direktur PT. Buatan Guna Indonesia, Vintex Grandis selaku pihak yang ikut serta dalam merancang pembuatan
            pompa hidram ini juga menyampaikan, "Pompa hidram ini adalah teknologi yang cocok untuk masyarakat, selain
            free cost maintenance juga gampang untuk transfer teknologi dalam pengoperasiannnya". </p>
        </div>
      </x-section>
      <x-section>
        <x-slot name="title">Goals</x-slot>

        <div class="space-y-4">
          @if (false)
          <div class="bg-white p-2 border rounded flex items-center">
            <img src="{{ url('images/Sketch_Ai-03.png') }}" alt="" srcset="">
          </div>
          @endif
          <p>
            Per tahun ditargetkan 24 desa kesulitan air di Jawa Barat dapat menerima bantuan pompa hidram. Estimasi
            donasi yang dibutuhkan per tahun untuk memberikan bantuan pompa hidram sebesar Rp. 1,44 M.
          </p>
        </div>
      </x-section>
      <x-jet-section-border />

      <div class="grid grid-cols-2 gap-4">
        <div>
          <div class="text-gray-400 flex items-center">
            <i class="ri-arrow-left-line mr-2"></i>
            <div class="mt-1">Prev Post</div>
          </div>
          <a href="#" class="hover:underline">Donor Darah Untuk Bangsa</a>
        </div>
        <div class="text-right">
          <div class="text-gray-400 flex items-center justify-end">
            <div class="mt-1">Next Post</div>
            <i class="ri-arrow-right-line ml-2"></i>
          </div>
          <a href="#" class="hover:underline">Rumah Sakit Alumni ITB</a>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>