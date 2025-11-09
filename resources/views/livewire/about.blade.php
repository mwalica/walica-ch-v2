<div class="grid grid-cols-1 md:grid-cols-2 max-w-5xl mt-12">
    <div class="flex flex-col gap-8">
       <livewire:page-title title="O mnie" subtitle="Życiowe pasje <span class='text-blue-800'>muzyka i fotografia</span>"/>
        <p>Werset z najważniejszej dla mnie Księgi: <br/><span class="text-gray-800">Powierz Bogu drogę swoją, Zaufaj mu, a On wszystko dobrze uczyni</span>
        </p>
        <ul class="flex flex-col gap-4">
            <livewire:list-item text="Jestem flecistą i nauczycielem informatyki"/>
            <livewire:list-item text="Lubię jeździć na rowerze i biegać"/>
            <livewire:list-item
                text="Lubię fotografować przyrodę - szczególnie pszczoły, kwiaty, nadmorskie krajobrazy oraz wszelkiego rodzaju detale"/>
            <livewire:list-item
                text="Interesuję się technologiami związanymi z tworzenie aplikacji mobilnych i webowych"/>
        </ul>
    </div>
    <div class="flex justify-center">
        <div>
            <img src="{{asset('images/omnie.jpg')}}" alt="Marek Walica" class="border-18 border-white max-w-2xl shadow-2xl">
        </div>
    </div>
</div>
