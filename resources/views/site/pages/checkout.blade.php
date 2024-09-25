@extends('site.pages.master')
@section('content')
    <section id="checkout-page">
        <div class="container">
            <form action="{{ route('place.order') }}" method="post" style="margin-bottom: 10px;padding: 20px;">
                @csrf
                <div class="row">
                    <div class="col-9">
                        <h4>Personal Information</h4>
                        <div class="Information_form"  style="background-color: rgb(241, 238, 238);border-radius: 5px;margin-bottom: 10px;padding: 20px;">
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6"><label for="Name">First Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="first_name" id="first_name"
                                        placeholder="First Name">
                                    @error('first_name')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6"><label for="Name">Last Name</label>
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                        name="last_name" id="last_name"
                                        placeholder="Last Name">
                                    @error('last_name')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                               id="email" placeholder="Email">
                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="Phone">Phone</label>
                            <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" id="mobile" placeholder="mobile">
                            @error('mobile')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="Address">Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                                        name="address" placeholder="Address">
                                    @error('address')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-6"><label for="apartment">Apartment</label>
                                    <input type="text" class="form-control @error('apartment') is-invalid @enderror"
                                        name="apartment"  id="name"
                                        placeholder="apartment">
                                    @error('apartment')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="city">City</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                                 placeholder="City">
                            @error('city')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="city">District</label>
                            <input type="text" class="form-control @error('district') is-invalid @enderror"
                                name="district"  placeholder="district">
                            @error('district')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="country">Country</label>
                            <input type="text" class="form-control @error('country') is-invalid @enderror" name="country"
                                placeholder="Country">
                            @error('country')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control @error('zip') is-invalid @enderror" name="zip"
                                placeholder="zip">
                            @error('zip')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h4 class="text-center">Order Summery</h4>
                        <div class="order-card" style="background-color: rgb(221, 219, 219);padding: 20px;margin: 20px">
                            @php $total = 0 @endphp
                            @if (session('cart'))
                                @foreach (session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                    <tr>
                                        <td class="text-center">{{ $details['name'] }}X{{ $details['quantity'] }}
                                        </td>
                                        <td class="text-center">{{ $details['quantity'] * $details['price'] }}
                                        </td>
                                        <br>
                                    </tr>
                                @endforeach
                                <hr>
                                <tr>
                                    <td>
                                        <h6><strong>Subtotal {{ $total }}</strong></h6>
                                        <input type="hidden" name="subtotal" id="" value="{{ $total }}">
                                    </td>
                                    <td>
                                        <h6><strong>Shipping 70</strong></h6>
                                        <input type="hidden" name="shipping" id="" value="{{ 70 }}">
                                    </td>
                                    <hr>
                                    <td>
                                        <h5><strong>Total {{ $total + 70 }}</strong></h5>
                                        <input type="hidden" name="grand_total" id="" value="{{ $total + 70 }}">
                                    </td>
                                </tr>
                            @endif
                        </div>
                        <div class="order-card" style="background-color: rgb(221, 219, 219);padding: 20px;margin: 20px">
                            <p><strong>Payment Method</strong></p>
                            <input type="radio" id="cod" name="fav_language" value="cod">
                            <label for="cod">COD</label><br>
                            <input type="radio" id="bKash" name="fav_language" value="bKash">
                            <label for="bKash">bKash</label><br>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </section>
@endsection
