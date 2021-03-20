<x-app-layout>
  <div class="w-full h-96">
    <div class="relative flex h-full">
      <div class="w-full h-full bg-pink-500 text-white flex items-center bg-center bg-cover"
        style="background-image: url(/images/slide-1.jpg)">
        <div class="w-full h-full flex items-center justify-center flex-col bg-black bg-opacity-40">
          <div class="container flex flex-col">
            <div class="md:w-3/4 w-full p-4 mx-auto">
              <div class="text-5xl">
                Your article title here
              </div>
              <div class="text-xl">
                by <a href="#" class="font-bold hover:underline">Admin itbconnect</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-8 px-4 space-y-4">
    <div class="md:w-3/4 w-full mx-auto space-y-8">
      <div class="text-gray-400 flex space-x-4 flex-wrap">
        <div class="space-x-2 flex">
          <div class="ri-calendar-line"></div>
          <div class="whitespace-nowrap">September 25, 2020</div>
        </div>

        <div class="space-x-2 flex">
          <div class="ri-question-answer-line"></div>
          <div class="whitespace-nowrap">Add comment</div>
        </div>

        <div class="space-x-2 flex">
          <div class="ri-eye-line"></div>
          <div class="whitespace-nowrap">1.245 views</div>
        </div>

        <div class="space-x-2 flex">
          <div class="ri-time-line"></div>
          <div class="whitespace-nowrap">1 min read</div>
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

      <div class="space-y-4">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum non arcu auctor luctus. Maecenas tempus
          pellentesque ullamcorper. Duis auctor congue eros, non consequat nunc elementum in. Proin a ipsum tempus,
          sollicitudin sem non, scelerisque quam. Nullam ut risus vitae turpis ornare pharetra. Nulla non sapien
          facilisis
          tellus rutrum pellentesque quis in eros. Donec ac dui id metus suscipit iaculis. Proin arcu tortor, luctus nec
          quam sit amet, feugiat tempor arcu. Donec non risus imperdiet, venenatis ipsum venenatis, maximus justo.
          Nullam
          et massa quis augue interdum faucibus vel a dolor. Morbi dictum tortor ornare, egestas enim a, bibendum
          lectus.
          Etiam at finibus arcu, in aliquet libero. Sed nunc odio, blandit a tortor sed, consequat venenatis tellus.
        </p>
        <p>Suspendisse quis elementum orci, sit amet pulvinar magna. Maecenas faucibus nisi at vestibulum aliquam.
          Aliquam
          consequat ex nisl, ac bibendum neque faucibus auctor. Suspendisse ut sagittis metus. Phasellus vel porta
          augue.
          Ut ut libero purus. Morbi id posuere ante. In nisl elit, ultrices at mauris non, consequat mattis lectus. Sed
          odio nisl, interdum et tempus ut, rutrum vel libero. Maecenas mauris ex, hendrerit sit amet arcu at, interdum
          accumsan ligula. Proin posuere arcu magna, et pulvinar nisl dignissim eu. </p>
        <img class="bg-white p-2 border rounded" src="{{ url('images/Sketch_Ai-03.png') }}" alt="" srcset="">
        <p>Donec id ante ut leo lobortis interdum. Vivamus leo justo, semper non ex sed, pulvinar egestas felis. Ut in
          magna quis dui pellentesque facilisis ac ac leo. </p>
      </div>

      <x-jet-section-border />

      <div class="grid grid-cols-2 gap-4">
        <div>
          <div class="text-gray-400 flex items-center">
            <i class="ri-arrow-left-line mr-2"></i>
            <div class="mt-1">Prev Post</div>
          </div>
          <a href="#" class="hover:underline">Alumni Gathering MAB</a>
        </div>
        <div class="text-right">
          <div class="text-gray-400 flex items-center justify-end">
            <div class="mt-1">Next Post</div>
            <i class="ri-arrow-right-line ml-2"></i>
          </div>
          <a href="#" class="hover:underline">FITB Talks: Sehari Mengenal FITB Lebih Dekat</a>
        </div>
      </div>

      <x-jet-section-border />

      <form action="">
        <div class="flex flex-col space-y-4">
          <div class="text-lg">Leave a reply</div>
          <div class="text-gray-400">Your email address will not be published. Required field ar marked <span
              class="text-red-500">*</span></div>
          <textarea
            class="block resize-none border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            id="adress" type="text" name="adress" rows="6" placeholder="Comment*" required></textarea>
          <x-jet-input id="name" class="block" type="text" name="name" placeholder="Name*" required />
          <x-jet-input id="email" class="block" type="email" name="email" placeholder="Email*" required />
          <x-jet-input id="website" class="block" type="text" name="website" placeholder="Website" />
          <div class="flex">
            <x-button color="primary">Post Comment</x-button>
          </div>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>