<x-app-layout>

  <div class="sm:mt-12 pb-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class="py-8 px-6 text-gray-900">
          <h1 class="text-xl mb-4">サポーター {{ Auth::user()->name }} 様</h1>
          <div class="text-sm mb-2">
            <p class='mb-2'>この度、旅のサポートを引き受けて下さり<br>ありがとうございます。</p>
            <p class='mb-2'>安心安全に旅を楽しんでもらえるように、<br>最後まで全力でサポートさせて頂きます！</p>
            <p>少しでも分からないことなどございましたら、<br>いつでもご連絡下さい！</p>
          </div>
          <div class="illust">
            <img src="{{ asset('illust/top_message.png')}}">
          </div>

          <p class='mb-1'>SOY旅 Co.</p>
          <p>TEL : <a href="tel:">000-000-0000</a></p>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
