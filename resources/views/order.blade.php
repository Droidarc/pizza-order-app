@extends('layouts.master')

@section('content')
<div class="container">
    <div class="bg-content">
        <a href="{{ route('orders') }}" class="btn btn-xs btn-primary">
            <i class="glyphicon glyphicon-arrow-left"></i> Siparişlere Dön
        </a>
        <h2>Sipariş (SP-{{ $order->id }})</h2>
        <table class="table table-bordererd table-hover">
            <tr>
                <th colspan="2">Ürün</th>
                <th>Tutar</th>
                <th>Adet</th>
                <th>Ara Toplam</th>
                <th>Durum</th>
            </tr>
            @foreach($order->basket->sepet_urunler as $sepet_urun)
            <tr>
                <td style="width: 120px;">
                    <a href="#">
                        <img src="{{ $sepet_urun->product->picture }}" style="height: 120px;">
                    </a>
                </td>
                <td>
                    <a href="#">{{ $sepet_urun->product->title }}</a>
                </td>
                <td>{{ $sepet_urun->price }}</td>
                <td>{{ $sepet_urun->number }}</td>
                <td>{{ $sepet_urun->price * $sepet_urun->number }}</td>
                <td>{{ $sepet_urun->condition }}</td>
            </tr>
            @endforeach
            <tr>
                <th colspan="4" class="text-right">Toplam Tutar</th>
                <td colspan="2">{{ $order->order_sum }}</td>
            </tr>
            <tr>
                <th colspan="4" class="text-right">Toplam Tutar (KDV'li)</th>
                <td colspan="2">{{ $order->order_sum * ((100+config('cart.tax')) / 100) }}</td>
            </tr>
            <tr>
                <th colspan="4" class="text-right">Sipariş Durum</th>
                <td colspan="2">{{ $order->condition }}</td>
            </tr>
        </table>
    </div>
</div>

@endsection
