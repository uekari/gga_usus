<x-app-layout>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 bg-white border-b border-gray-200">
          <div class="flex justify-center items-center mb-8">
            <p class="text-xl text-center pr-3">  {{ __('処置情報 ') }}</p>
            <p class="w-6 h-6"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M132.6 33.4l-15 5.6L64 59.1V192c0 70.7 57.3 128 128 128s128-57.3 128-128V59.1L266.4 39l-15-5.6 11.2-30 15 5.6 64 24L352 36.9V48 192c0 83-63.1 151.2-144 159.2v.8c0 70.7 57.3 128 128 128s128-57.3 128-128V254c-27.6-7.1-48-32.2-48-62c0-35.3 28.7-64 64-64s64 28.7 64 64c0 29.8-20.4 54.9-48 62v98c0 88.4-71.6 160-160 160s-160-71.6-160-160v-.8C95.1 343.2 32 275 32 192V48 36.9L42.4 33l64-24 15-5.6 11.2 30zM480 224a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
          </p>
          </div>

          @foreach ($treatments as $treatment)
          <div class="accordion-container">
            <h4 class="accordion-title jsAccordionTitle">{{$treatment->title}}</h4>
            <div class="accordion-content">
              <div class="flex flex-col text-gray-900">
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
