<x-app-layout>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            first({{ $periodOfDay[0] }}, {{ $periodOfDay[1] }}, {{ $periodOfDay[2] }}, {{ $periodOfDay[3] }});
        
        });
    </script>

    <header class="h-full pt-9 md:pb-12 md:pt-20 bg-rose-100">
        <div class="chartCard max-h-fit flex items-center justify-center">
        <div class="chartBox w-11/12 md:6/12 border-2 rounded-lg border-red-500 bg-white">
            <p class="font-extrabold md:pb-10 md:pt-3 md:px-10 md:text-5xl mt-4 pb-5 px-2 text-4xl text-black text-center">
                Relatório I
            </p>
              <div class="md:px-8 px-2">
                <hr class="border-1 border-red-500">
              </div>
            <div class="p-4 md:px-36">   
                <p class="font-bold md:pb-10 md:pt-3 md:px-10 md:text-4xl mt-4 pb-5 px-2 text-2xl text-gray-700 text-center">
                    Denúncias Acatadas Durante o Dia
                </p>
                <canvas id="myChart"></canvas>
            </div>
            
        </div>
    </header>
</x-app-layout>