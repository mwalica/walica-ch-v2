<div class="w-full md:w-6xl mt-12">
    <div class="flex flex-col gap-8">
        <livewire:page-title
            title="Photostock"
            subtitle="Moje zdjęcia i muzyka na <span class='text-blue-800'>Photostocks</span>"/>
        <p>Ansel Adams: <span class="text-gray-800">Sometimes I arrive just when God’s ready to have someone click the shutter</span>
        </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 mt-8 gap-6">
        <livewire:card
            link="https://stock.adobe.com/pl/contributor/88320/marek-walica"
            image="apple_bloom16_4s.jpg"
            title="AdobeStock"
            :kinds="['Foto', 'Wideo', 'Ilustracje']"
        />
        <livewire:card
            link="https://www.shutterstock.com/g/mwalica"
            image="barley17_14s.jpg"
            title="Shutterstock"
            :kinds="['Foto', 'Wideo']"
        />
        <livewire:card
            link="https://www.istockphoto.com/pl/portfolio/ajma_pl"
            image="canvas19_1s.jpg"
            title="Istock by GettyImages"
            :kinds="['Foto', 'Wideo']"
        />
        <livewire:card
            link="https://www.pond5.com/artist/mwalica"
            image="forest22_11.jpg"
            title="Pond5"
            :kinds="['Muzyka', 'Wideo', 'Foto']"
        />
    </div>
</div>
