@extends('template')

@section('content')
<div id="a" style="  position: absolute;
width: 317.25px;
height: 43.5px;
left: 138px;
top: 453.75px;

background: #f7f8f8;
box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.08);
border-radius: 20px;"></div>
<div class="cg" style="  position: absolute;
width: 885px;
height: 789px;
left: 555px;
top: 0px;

background: #475D9D;
border-radius: 15px 0px 0px 15px;"></div>
<p style="  position: absolute;
width: 402px;
height: 38px;
left: 146.25px;
top: 171.75px;

font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 33px;
line-height: 40px;
display: flex;
align-items: center;

color: #0E094D;">Masuk</p>
<p class="ck" style="  position: absolute;
width: 248px;
height: 23px;
left: 138px;
top: 272.25px;

font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 13.5px;
line-height: 16px;
display: flex;
align-items: center;
color: #0E094D;

;
">Email</p>
<p class="cl" style="  position: absolute;
width: 248px;
height: 23px;
left: 138px;
top: 351px;

font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 13.5px;
line-height: 16px;
display: flex;
align-items: center;
color: #0E094D;

;">Password</p>
<form action="" method="post">
    @csrf
    <div id="b" style="  position: absolute;
    width: 317.25px;
    height: 43.5px;
    left: 138px;
    top: 294px;
  
    background: #E8F0FE;
    border-radius: 20px;">
        <input class="form-control{{ $errors->has('email') ? 'is-invalid':'' }}"
        type="email" name="email" placeholder="Email"/>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div id="be" style="  position: absolute;
    width: 317.25px;
    height: 43.5px;
    left: 138px;
    top: 372.75px;
  
    background: #E8F0FE;
    border-radius: 20px;">
        <input class="form-control{{ $errors->has('password') ? 'is-invalid':'' }}"
        type="password" name="password" placeholder="Password"/>
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <button type="submit" style="position: absolute;
        width: 317.25px;
        height: 43.5px;
        left: 138px;
        top: 453.75px;
        
        background: #435EBE;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.08);
        border-radius: 20px;  color: #FFFFFF;">Login</button>
    </div>
</form>
<div class="cl" style="  position: absolute;
width: 425px;
height: 70px;
left: 780px;
top: 340px;

background: rgb(138, 184, 247);
border-radius: 15px 15px 15px 15px;"></div>
<p class="a" style="  position: absolute;
width: 276px;
height: 46px;
left: 995px;
top: 239px;

font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 48px;
line-height: 58px;

color: white;">Platform</p>
<p class="b" style="  position: absolute;
width: 357px;
height: 46px;
left: 945px;
top: 280px;

font-family: 'Inter';
font-style: normal;
font-weight: 500;
font-size: 48px;
line-height: 58px;

color: white;">Digitalisasi</p>
<p class="c" style="  position: absolute;
width: 553px;
height: 61.8px;
left: 800px;
top: 343px;

font-family: 'Inter';
font-style: normal;
font-weight: 800;
font-size: 48px;
line-height: 58px;

color: #0E094D;">E-Sarpras Vokasi</p>
@endsection