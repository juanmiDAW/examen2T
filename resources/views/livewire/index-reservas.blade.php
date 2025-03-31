<div>

    <select name="pista" id="pista" wire:model.live="pista">
        @foreach ($pistas as $pista)
            <option value="{{ $pista->id }}">{{ $pista->nombre }}</option>
        @endforeach
    </select>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
        </thead>
        @for ($i = 10; $i <= 19; $i++)
        @php
            $fecha = now()->startOfWeek($dias)
        @endphp
            <tr>
                <th>{{ $i }}:00</th>
                <td>
                    <form action="reservas.store" method="post">
                        <input type="hidden" name="diaYHora" value="{{$i}}">
                        <button type="button"
                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Reservar</button>
                    </form>
                </td>
                <td>
                    <button type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Reservar</button>
                </td>
                <td>
                    <button type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Reservar</button>
                </td>
                <td>
                    <button type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Reservar</button>
                </td>
                <td>
                    <button type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Reservar</button>
                </td>
            </tr>
        @endfor
    </table>
</div>
