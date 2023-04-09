<x-app-layout>

  <div class="sm:mt-12 pb-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 ">
      <div class="bg-white overflow-hidden sm:rounded-lg min-height">
        <div class="p-6 text-gray-900">
          <h1>サポーター {{ Auth::user()->name }} 様</h1>
          <p>この度、旅のサポートを引き受けて下さり</p>
          <p>ありがとうございます。</p>
          <p>安心安全に旅を楽しんでもらえるよう、</p>
          <p>最後まで全力でサポートさせて頂きます！</p>
          <p>少しでも分からないことなどございましたら、</p>
          <p>いつでもご連絡下さい！</p>
          <img src="http://www.ushikukankou.com/images2/others/ushikushi-goto/04.jpg" width="60%">
          <p>〇〇会社</p>
          <p>000-000-0000</p>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
