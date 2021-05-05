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
    <th>Liste en cour</th>
    <th>&nbsp;</th>
    </thead>
    <tbody>
    @foreach ($data as $task)
        <tr>
            <td class="table-text"><div>{{ $task->qr }}</div></td>

            <!-- Task Delete Button -->
            <td>
                <form action="{{ url('task/'.$task->id) }}" id="pc{{ url('task/'.$task->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <a href="#" onclick="document.getElementById('pc{{ url('task/'.$task->id) }}').submit();">
                        <i class="fa fa-btn fa-trash"></i>
                    </a>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
