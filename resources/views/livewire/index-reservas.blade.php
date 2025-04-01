<div>

    <select name="pista" id="pista" wire:model.live="pista_id">
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
            <tr>
                <th>{{ $i }}:00</th>
                @for ($j = 0; $j < 5; $j++)
                    @php
                        $fecha = now()->startOfWeek()->addDay($j)->setTime($i, 0, 0);
                    @endphp
                    <td>
                        <form action="{{route('reservas.store')}}" method="post">
                            @csrf
                            
                            <input type="hidden" name="diaYHora" value="{{ $fecha }}">
                            <input type="hidden" name="pista_id" value="{{$pista_id}}">
                            <button type="submit"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Reservar</button>
                        </form>
                    </td>
                @endfor
            </tr>
        @endfor
    </table>
</div>
