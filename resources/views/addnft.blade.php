@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
<div class="CoinForm_contentwrapper__1un5N">
    <div class="CoinForm_Container__1I1hA">
        <div class="CoinForm_BreadcrumbButton__2tkFs">
            <div class="back">
                <div class="Breadcrumbs_breadcrumbContainer__33kZJ">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#" role="button">
                                    <a class="breadcrumbHome" href="/">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" style="margin-right: 3px; margin-bottom: 3px;">
                                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z">
                                                </path>
                                            </svg>
                                            Home
                                        </a>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    NFT Form
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div style="text-align: left; margin-bottom: 8px;">
                <div class="CoinForm_TopTitle__2zXME">
                    <h1 style="font-size:
                    24px;
                    font-family: montserrat-medium;
                    line-height: 36px;
                    vertical-align: baseline;
                    font-weight: 700">NFT listing request</h1>
                </div>
            </div>
            <div class="card warper" style="padding: 20px;">
                <form class="">
                    <div class="row" style="text-align: left;">
                        <div class="col-md-6 col-sm-12">
                            <h4>NFT informations</h4>
                            <div class="form-group">
                                <label class="CoinForm_FormLabel__CiWCA">Title</label>
                                <span class="text-danger ml-2" style="font-size: 0.6rem;">Required</span>
                                <input placeholder="Ex: Giveaway NFT" required="" maxlength="30" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="CoinForm_FormLabel__CiWCA">Image</label>
                                <span class="text-danger ml-2" style="font-size: 0.6rem;">Required</span>
                                <input placeholder="Ex: https://i.ibb.co/logo.png" maxlength="1000" required="" id="images" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="CoinForm_FormLabel__CiWCA">Price</label>
                                <span class="text-danger ml-2" style="font-size: 0.6rem;">Required</span>
                                <div class="input-group">
                                    <input placeholder="Ex: 0.06" required="" min="0" step=".00000000000000001" type="number" id="price" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="CoinForm_FormLabel__CiWCA">Chain</label>
                                <span class="text-danger ml-2" style="font-size: 0.6rem;">Required</span>
                                <input placeholder="Ex: Polygon" maxlength="20" required="" id="chainName" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" id="isCollection" class="form-check-input">
                                    <label title="" for="isCollection" class="form-check-label">This is an Nft Collection</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="CoinForm_FormLabel__CiWCA">Address</label>
                                <span class="text-danger ml-2" style="font-size: 0.6rem;">Required</span>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                            <img src="{{asset('web.png')}}" style="height: 24px; width: 24px; color: rgb(29, 161, 242);">
                                        </span>
                                    </div>
                                    <input placeholder="Ex: 0x1dDB2C0897daF18632662E71fdD2dbDC0eB3a9Ec" maxlength="100" required="" id="address" class="form-control" style="border-left: 0px;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="CoinForm_FormLabel__CiWCA">Artist link</label>
                                <input placeholder="Ex: https://rarible.com/loot-rng" maxlength="70" id="artistLink" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="CoinForm_FormLabel__CiWCA">Artist name</label>
                                <span class="text-danger ml-2" style="font-size: 0.6rem;">Required</span>
                                <input required="" placeholder="Ex: Bob" maxlength="20" id="artistName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="CoinForm_FormLabel__CiWCA">Launch date</label>
                                <input type="datetime-local" id="launchDate" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h4>NFT links</h4>
                            <div class="form-group">
                                <label class="CoinForm_FormLabel__CiWCA">Telegram</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                            <img src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/335_Telegram_logo-512.png" style="height: 24px; width: 24px; color: rgb(29, 161, 242);">
                                        </span>
                                    </div>
                                    <input placeholder="Ex: https://t.me/bitcoin" maxlength="100" id="telegram" class="form-control" style="border-left: 0px;"></div>
                                </div>
                                <div class="form-group">
                                    <label class="CoinForm_FormLabel__CiWCA">Twitter</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfYTX438ZqN13NCDj8IrL_devQKjOweZ1zLg&usqp=CAU" style="height: 24px; width: 24px; color: rgb(29, 161, 242);">
                                            </span>
                                        </div>
                                        <input placeholder="Ex: https://twitter.com/CoinhuntCC" maxlength="100" id="twitter" class="form-control" style="border-left: 0px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="CoinForm_FormLabel__CiWCA">Instagram</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                                <img src="https://coinhunt.cc/resources/Images/igIcon.svg" style="height: 24px; width: 24px; color: rgb(29, 161, 242);">
                                            </span>
                                        </div>
                                        <input placeholder="Ex: https://instagram.com/CoinhuntCC" maxlength="100" id="instagram" class="form-control" style="border-left: 0px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="CoinForm_FormLabel__CiWCA">Discord</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                                <img src="https://coinhunt.cc/resources/Images/discord.svg" style="height: 24px; width: 24px; color: rgb(29, 161, 242);">
                                            </span>
                                        </div>
                                        <input placeholder="Ex: https://discord.com/CoinhuntCC" maxlength="100" id="discord" class="form-control" style="border-left: 0px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="CoinForm_FormLabel__CiWCA">Description</label>
                                    <span class="text-danger ml-2" style="font-size: 0.6rem;">Required</span>
                                    <textarea placeholder="Ex: Bitcoin is a decentralized digital currency" rows="3" required="" maxlength="1000" id="description" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>



@endsection
