<h1>trang home</h1>
@foreach ($students as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->address }}</td>
        <td>{{ $item->mobile }}</td>
    </tr>
    <br>
@endforeach
