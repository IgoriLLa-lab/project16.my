<h1>Первое задание</h1>
<table class='table table-hover table-responsive table-bordered'>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Компания</th>
        <th>Должность</th>
        <th>Серия паспорта</th>
        <th>Номер паспорта</th>
        <th>Дата рождения</th>
    </tr>

    @foreach($workers as $item)
        <tr>
            <td>{{ $item->first_name }}</td>
            <td>{{ $item->last_name }}</td>
            <td>{{ $item->company }}</td>
            <td>{{ $item->role }}</td>
            <td>{{ $item->number }}</td>
            <td>{{ $item->series }}</td>
            <td>{{ $item->birthday }}</td>
    @endforeach
</table>
