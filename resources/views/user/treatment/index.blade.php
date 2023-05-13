<x-app-layout>
  <div class="sm:mt-12 pb-20">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg pb-10">
        <div class="p-6 bg-round rounded-lg">

          <section class="text-gray-900 text-center body-font">
            <div class="flex justify-center items-center mb-10 mt-4">
              <p class="pb-2 text-2xl text-center font-bold">  {{ __('処置情報 ') }}</p>

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
                    <p class="text-lg">{{$treatment->content}}</p>
                  </div>
                  <div>
                    <p class="mb-1">ポイント</p>
                    <div class="mb-2 gga_border">
                    </div>
                    <p class="text-lg">{{$treatment->point}}</p>
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
