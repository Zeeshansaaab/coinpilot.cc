@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="CoinForm_contentwrapper__1un5N">
                <div class="CoinForm_Container__1I1hA">
                    <div class="CoinForm_BreadcrumbButton__2tkFs">
                        <div class="back"><div class="Breadcrumbs_breadcrumbContainer__33kZJ">
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
                                        <li class="breadcrumb-item active" aria-current="page">CoinForm</li>
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
                                        font-weight: 700">Coin listing request
                                        </h1>
                                        </div>
                                    </div>
                                    <div class="card warper" style="padding: 20px;">
                                        <form class="">
                                            <div class="row" style="text-align: left;">
                                                <div class="col-md-6 col-sm-12">
                                                    <h4>Coin informations</h4>
                                                    <div class="form-group">
                                                        <label class="CoinForm_FormLabel__CiWCA">Name</label>
                                                        <span class="text-danger ml-2" style="font-size: 0.6rem;">Required</span>
                                                        <input placeholder="Ex: Bitcoin" required="" maxlength="50" id="formName" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="CoinForm_FormLabel__CiWCA">Symbol</label>
                                                        <span class="text-danger ml-2" style="font-size: 0.6rem;">Required</span>
                                                        <input placeholder="Ex: BTC" required="" maxlength="50" id="formSymbol" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="CoinForm_FormLabel__CiWCA">Description</label>
                                                        <textarea placeholder="Ex: Bitcoin is a decentralized digital currency" rows="3" maxlength="1000" id="formDescription" class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="CoinForm_FormLabel__CiWCA">Logo</label>
                                                            <input placeholder="Ex: https://i.ibb.co/logo.png" maxlength="300" id="formLogo" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="CoinForm_FormLabel__CiWCA">Price</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                                                        <p style="color: gray; font-size: 0.9rem;">$</p>
                                                                    </span>
                                                                </div>
                                                                <input placeholder="Ex: 0.006" min="0" step=".00000000000000001" type="number" id="formPrice" class="form-control" style="border-left: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="CoinForm_FormLabel__CiWCA">Market cap</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                                                        <p style="color: gray; font-size: 0.9rem;">$</p>
                                                                    </span>
                                                                </div>
                                                                <input placeholder="Ex: 150000" min="0" type="number" id="formMarketCap" class="form-control" style="border-left: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="CoinForm_FormLabel__CiWCA">Launch date</label>
                                                            <span class="text-danger ml-2" style="font-size: 0.6rem;">Required</span>
                                                            <input required="" type="datetime-local" id="formLaunch" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input type="checkbox" id="formPresale" class="form-check-input">
                                                                <label title="" for="formPresale" class="form-check-label">Presale</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <h4>Coin contracts</h4>
                                                        <div class="form-group">
                                                            <label class="CoinForm_FormLabel__CiWCA">Binance Smart Chain</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                                                        <div class="icon-bsc" style="height: 15px; width: 15px; color: rgb(255, 219, 44);">
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <input placeholder="Ex: 0x0000000000000000000" maxlength="100" id="formBscContract" class="form-control" style="border-left: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="CoinForm_FormLabel__CiWCA">Ethereum</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                                                        <div class="icon-eth" style="height: 15px; width: 15px; color: rgb(113, 121, 175);">
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <input placeholder="Ex: 0x0000000000000000000" maxlength="100" id="formEthContract" class="form-control" style="border-left: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="CoinForm_FormLabel__CiWCA">Solana</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                                                        <div class="icon-solana" style="height: 15px; width: 15px; color: rgb(0, 255, 163);">
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <input placeholder="Ex: xxxxxxxxxxxxxxxxxxxxxxxxx" maxlength="100" id="formSolContract" class="form-control" style="border-left: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="CoinForm_FormLabel__CiWCA">Polygon</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                                                        <div class="icon-polygon" style="height: 15px; width: 15px; color: rgb(130, 71, 229);">
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <input placeholder="Ex: 0x0000000000000000000" maxlength="100" id="formPolygonContract" class="form-control" style="border-left: 0px;">
                                                            </div>
                                                        </div>
                                                        <h4>Coin links</h4>
                                                        <div class="form-group">
                                                            <label class="CoinForm_FormLabel__CiWCA">Website</label>
                                                            <span class="text-danger ml-2" style="font-size: 0.6rem;">Required</span>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                                                        <div class="icon-website" style="height: 15px; width: 15px; color: rgb(0, 111, 194);">
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <input placeholder="Ex: https://www.bitcoin.com" maxlength="100" required="" id="formWebsite" class="form-control" style="border-left: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="CoinForm_FormLabel__CiWCA">Telegram</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                                                        <div class="icon-telegram" style="height: 15px; width: 15px; color: rgb(3, 155, 228);">
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <input placeholder="Ex: https://t.me/bitcoin" maxlength="100" id="formTelegram" class="form-control" style="border-left: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="CoinForm_FormLabel__CiWCA">Twitter</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="inputDiv input-group-text" style="background-color: unset; border-right: 0px;">
                                                                        <div class="icon-twitter" style="height: 15px; width: 15px; color: rgb(29, 161, 242);">
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <input placeholder="Ex: https://twitter.com/CoinhuntCC" maxlength="100" id="formTwitter" class="form-control" style="border-left: 0px;">
                                                            </div>
                                                        </div>
                                                        <h4>Additional informations</h4>
                                                        <div class="form-group">
                                                            <textarea placeholder="Other links, other blockchain contracts or anything else you would like to add to your coin request" rows="3" maxlength="1000" id="formOther" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                                <div class="warper card" style="margin-top: 10px; padding-left: 5px; padding-right: 5px;">
                                                    <h3 style="text-align: center;"><b>Listing requirements</b></h3>
                                                    <div style="text-align: left; margin-left: 10%;  align-self: center;">
                                                        <p>🟢 Valid contract address</p>
                                                        <p>🟢 Working website where we can check the contract address</p>
                                                        <p>🟢 Locked liquidity</p>
                                                        <p>🟢 Reasonable holding of supply</p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
        </div>
    </div>
</div>
@endsection
