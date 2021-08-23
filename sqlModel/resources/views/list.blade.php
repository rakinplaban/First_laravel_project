<h1>List Member</h1>
<table border="1">
    <tr>
        <td>Date</td>
        <td>Trade Code</td>
        <td>High</td>
        <td>Low</td>
        <td>Open</td>
        <td>Close</td>
        <td>Volume</td>
    </tr>
    @foreach ($stockmarkets as $stock)
        <tr>
            <td>{{ $stock['date'] }}</td>
            <td>{{ $stock['trade_code'] }}</td>
            <td>{{ $stock['high'] }}</td>
            <td>{{ $stock['low'] }}</td>
            <td>{{ $stock['open'] }}</td>
            <td>{{ $stock['close'] }}</td>
            <td>{{ $stock['volume'] }}</td>
        </tr>
    @endforeach
</table>