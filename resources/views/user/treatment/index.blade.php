<x-app-layout>
  <div class="sm:mt-12 pb-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg pb-10 min-height">
        <div class="p-6 bg-white">
          <div class="mb-6 ml-1">
            <a href="{{ url()->previous() }}">
              <p class="w-4 h-4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M4.7 244.7c-6.2 6.2-6.2 16.4 0 22.6l176 176c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6L54.6 272 432 272c8.8 0 16-7.2 16-16s-7.2-16-16-16L54.6 240 203.3 91.3c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0l-176 176z"/></svg></p>
            </a>
          </div>
          <section class="text-gray-900 text-center body-font">
            <div class="flex items-center mb-10">
              <p class="text-center pr-4 text-3xl">  {{ __('処置情報 ') }}</p>
              <p class="w-6 h-6 mb-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M132.6 33.4l-15 5.6L64 59.1V192c0 70.7 57.3 128 128 128s128-57.3 128-128V59.1L266.4 39l-15-5.6 11.2-30 15 5.6 64 24L352 36.9V48 192c0 83-63.1 151.2-144 159.2v.8c0 70.7 57.3 128 128 128s128-57.3 128-128V254c-27.6-7.1-48-32.2-48-62c0-35.3 28.7-64 64-64s64 28.7 64 64c0 29.8-20.4 54.9-48 62v98c0 88.4-71.6 160-160 160s-160-71.6-160-160v-.8C95.1 343.2 32 275 32 192V48 36.9L42.4 33l64-24 15-5.6 11.2 30zM480 224a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg></p>
            </div>
            @foreach ($treatments as $treatment)
            <div class="accordion-container">
              <h4 class="accordion-title jsAccordionTitle">{{$treatment->title}}</h4>
              <div class="accordion-content">
                <div class="flex flex-col text-gray-900 text-left">
                  <div class=mb-6>
                    <p class="mb-1">手順</p>
                    <div class="mb-2 gga_border">
                    </div>
                    <p class="text-sm">{{$treatment->content}}</p>
                  </div>
                  <div>
                    <p class="mb-1">ポイント</p>
                    <div class="mb-2 gga_border">
                    </div>
                    <p class="text-sm">{{$treatment->point}}</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </section>


        </div>
      </div>
    </div>
  </div>
</x-app-layout>

<script type="text/javascript">
const title = document.querySelectorAll(".jsAccordionTitle");
console.log(title);
//forEachでtitleを一つ一つtitleEachに入れている
title.forEach((titleEach) => {
  //nextElementSiblingはjQueryのnext()みたいなもの
  let content = titleEach.nextElementSibling;
  titleEach.addEventListener("click", () => {
    titleEach.classList.toggle("is-active");
    content.classList.toggle("is-open");
  });
});
</script>
