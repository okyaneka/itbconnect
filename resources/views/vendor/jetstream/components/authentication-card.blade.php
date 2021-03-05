<div class="relative min-h-screen flex flex-wrap items-center justify-center">
  <div id="slider-1">
    <div class="fixed top-0 left-0 w-full h-screen -z-10">
      <div class="relative flex h-full">
        <div class="absolute w-full h-full overflow-hidden">
          <div class="flex flex-nowrap h-full w-full transition-all ease-in-out duration-1000 slide relative left-0">
            <div class="w-full h-full bg-pink-500 text-white flex flex-none items-center px-16 bg-center bg-cover"
              style="background-image: url(/images/slide-1.jpg)">
              <div class="sm:max-w-xs md:max-w-sm lg:max-w-md w-full">
                <div class="text-5xl">
                  Type your title here
                </div>
              </div>
            </div>
            <div
              class="w-full h-full bg-red-500 text-white flex flex-none items-center text-5xl px-16 bg-center bg-cover"
              style="background-image: url(/images/slide-2.jpg)">
              Dua</div>
            <div class="w-full h-full bg-primary text-white flex flex-none items-center text-5xl px-16 bg-center bg-cover"
              style="background-image: url(/images/slide-3.jpg)">
              Tiga</div>
          </div>
        </div>
      </div>
    </div>

    <x-button-icon class="prev fixed inset-y-1/2 left-4 transform -translate-y-1/2"><i class="ri-arrow-left-s-fill"></i>
    </x-button-icon>
    <x-button-icon class="next fixed inset-y-1/2 right-4 transform -translate-y-1/2"><i
        class="ri-arrow-right-s-fill"></i>
    </x-button-icon>

    <script>
      window.addEventListener('load', (event) => {
        let slide = document.querySelector('#slider-1 .slide');

        document.querySelector('#slider-1 .next').addEventListener('click', function () {
            let cur_loc = (parseInt(slide.style.left) || 0);
            slide.style.left = `${cur_loc - 100 > slide.childElementCount * -100 ? cur_loc - 100 : 0}%`
        })

        document.querySelector('#slider-1 .prev').addEventListener('click', function () {
            let cur_loc = (parseInt(slide.style.left) || 0);
            slide.style.left = `${cur_loc + 100 <= 0 ? cur_loc + 100 : (slide.childElementCount - 1) * -100}%`
        })

        let slider = setInterval(() => {
          try {
            let cur_loc = (parseInt(slide.style.left) || 0);
            slide.style.left = `${cur_loc - 100 > slide.childElementCount * -100 ? cur_loc - 100 : 0}%`
            // slide.style.left = `${cur_loc + 100 <= 0 ? cur_loc + 100 : (slide.childElementCount - 1) * -100}%`
          } catch (error) {
            clearInterval(slider)
            console.error(error);
          }
        }, 5000);
      })
    </script>
  </div>

  <div class="container m-16 flex md:justify-end justify-center">
    <div class="border bg-white bg-opacity-90 shadow-md rounded-lg">
      <div class="md:max-w-sm max-w-md p-6 w-full">
        {{ $slot }}
      </div>
    </div>
  </div>
</div>