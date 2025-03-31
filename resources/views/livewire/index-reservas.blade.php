<div>
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
        @for ($i = 10; $i >= 19; $i++)
            <tr>
                <th>{{ $i }}:00</th>
                <td><button>Reservar</button></td>
                <td><button>Reservar</button></td>
                <td><button>Reservar</button></td>
                <td><button>Reservar</button></td>
                <td><button>Reservar</button></td>
            </tr>
        @endfor
    </table>
</div>
