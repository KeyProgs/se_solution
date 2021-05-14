{{--@if (count($tasks) > 0)--}}
{{--    <div class="panel panel-default">--}}
{{--        <div class="panel-heading">--}}
{{--            Pallete en cour--}}
{{--        </div>--}}

{{--        <div class="panel-body">--}}
{{--  --}}
{{--            --}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endif--}}


<table class="table table-striped task-table">

    <thead>
    <th><a href="categorie/{{$categorie->id}}/palettes" >{{$categorie->categorie}}</a>
        <br>
      </th>

    </thead>
    <tbody>
    @foreach ( $categorie->lastPalette()->getPackets() as $packet)



        <tr>
            <td class="table-text">
                <div>{{ $packet->qr }}</div>
            </td>

            <!-- Task Delete Button -->
            <td>
                <form action="{{ url('packet/destroy/'.$packet->id) }}" id="packet{{ $packet->id}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}

                    <a href="#" onclick="document.getElementById('packet{{ $packet->id}}').submit();">
                        <i class="fa fa-btn fa-trash"></i>
                    </a>
                </form>
            </td>
        </tr>

        @php


        @endphp
    @endforeach
    </tbody>
</table>
