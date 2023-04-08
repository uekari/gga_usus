<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('top') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
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
