@extends('layouts.master')

@section('content')
<div class="container">
      <div class="bg-content">
          <h2>Ödeme</h2>
          <form action="{{ route('pay') }}" method="POST">
              {{ csrf_field() }}
          <div class="row">
              <div class="col-md-5">
                  <h3>Ödeme Bilgileri</h3>
                  <div class="form-group">
                      <label for="kart_numarasi">Kredi Kartı Numarası</label>
                      <input type="text" class="form-control kredikarti" id="kart_numarasi" name="kart_numarasi" style="font-size:20px;" required>
                  </div>
                  <div class="form-group">
                      <label for="son_kullanma_tarihi_ay">Son Kullanma Tarihi</label>
                      <div class="row">
                          <div class="col-md-6">
                              Ay
                              <select name="son_kullanma_tarihi_ay" id="son_kullanma_tarihi_ay" class="form-control" required>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                                  <option>11</option>
                                  <option>12</option>
                              </select>
                          </div>
                          <div class="col-md-6">
                              Yıl
                              <select id="son_kullanma_tarihi_yil" name="son_kullanma_tarihi_yil" class="form-control" required>
                                  <option>2018</option>
                                  <option>2019</option>
                                  <option>2020</option>
                                  <option>2021</option>
                                  <option>2022</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="cardcvv2">CVV (Güvenlik Numarası)</label>
                      <div class="row">
                          <div class="col-md-4">
                              <input type="text" class="form-control kredikarti_cvv" name="cardcvv2" id="cardcvv2" required>
                          </div>
                      </div>
                  </div>
                  <form>
                      <div class="form-group">
                          <div class="checkbox">
                              <label><input type="checkbox" checked> Ön bilgilendirme formunu okudum ve kabul ediyorum.</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="checkbox">
                              <label><input type="checkbox" checked> Mesafeli satış sözleşmesini okudum ve kabul ediyorum.</label>
                          </div>
                      </div>
                  </form>
                  <button type="submit" class="btn btn-success btn-lg">Ödeme Yap</button>
              </div>
              <div class="col-md-7">
                  <h4>Ödenecek Tutar</h4>
                  <span class="price">{{ Cart::total() }} <small>TL</small></span>

                  <h4>İletişim ve Fatura Bilgileri</h4>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="fullname">Ad Soyad</label>
                              <input type="text" class="form-control" name="fullname" id="fullname" value="{{ auth()->user()->name}}" required>
                          </div>
                      </div>
                      <div class="col-md-8">
                          <div class="form-group">
                              <label for="address">Adres</label>
                              <input type="text" class="form-control" name="address" id="address" value="{{ $user_detail->address }}" required>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="telephone">Telefon</label>
                              <input type="text" class="form-control telephone" name="telephone" id="telephone" value="{{ $user_detail->telephone }}" required>
                          </div>
                      </div>
                      <div class="col-md-8">
                          <div class="form-group">
                              <label for="mobil">Cep Telefonu</label>
                              <input type="text" class="form-control telephone" name="mobile" id="mobile" value="{{ $user_detail->mobile }}" required>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </form>
      </div>
  </div>

@endsection
