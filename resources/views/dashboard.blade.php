<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            Tristar Develops
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert2 type="info" class="mb-4">
                <x-slot name="title">
                    Este es un titulo desde slot
                </x-slot>

                <x-slot name="subtitle">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, quae.
                </x-slot>
                <p>Esto es un texto de prueba</p>
            </x-alert2>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               {{--  <x-welcome /> --}}
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero blanditiis esse repellendus praesentium, cum minima delectus suscipit perspiciatis ipsum unde nisi, cupiditate maiores eum illum in. Quaerat temporibus ipsam non.</p>
               <p>Aspernatur ut repudiandae fuga ea, sunt itaque vitae sapiente at! Expedita nesciunt, earum et ad dolor tempora doloribus beatae, molestias est animi deleniti corrupti dignissimos qui suscipit alias sapiente ducimus.</p>
               <p>Adipisci eaque voluptate, ex dolore eligendi nemo nobis labore tenetur quibusdam nam et consectetur inventore porro alias. Fugiat, dolorum quasi ab aliquid nobis ipsum dolorem earum omnis dolores vero deserunt.</p>
               <p>Error perspiciatis obcaecati commodi ad, sed, deleniti similique praesentium atque sunt ut, expedita quasi quibusdam eligendi exercitationem eaque neque libero nulla! Sint, velit. Nobis dolores eveniet, modi similique molestiae explicabo?</p>
               <p>Soluta ut maiores fuga molestiae laborum adipisci dignissimos sequi excepturi ullam commodi doloremque fugiat praesentium vel, voluptatibus iure rem vitae saepe consectetur voluptatum placeat voluptate. Reiciendis officiis obcaecati error deserunt.</p>

            </div>

            <h1>hola mundo</h1>
        </div>
    </div>


</x-app-layout>
