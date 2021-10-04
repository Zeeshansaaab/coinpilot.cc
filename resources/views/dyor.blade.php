@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="Dyor_breadcrumbsWrapper__1DTlM"><div class="Breadcrumbs_breadcrumbContainer__33kZJ"><nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="#" role="button"><a class="breadcrumbHome" href="/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" style="margin-right: 3px; margin-bottom: 3px;"><path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"></path></svg> Home</a></a></li><li class="breadcrumb-item active" aria-current="page">Dyor</li></ol></nav></div></div>
            <section class="Dyor_dyor__1-ZpE">
                <div class="card warper" style="padding: 30px; text-align: left;">
                    <h1>DYOR</h1>
                    <h2>But how? How to do your own research?</h2>
                    <p>Warning: There is absolutely no financial advice on this or on any other pages of this website. </p>
                    <p>This is an article to explain how to do your own research.</p>
                    <br>
                    <p>Without reading the solidity code of the contract you will never have 100% insurance on how a coin works, if it may be a scam or not. Investing in early crypto coin projects is equal to taking huge risks with your money.
                        <br>That being said, if you still want to try, below are a few reasonable things to do before doing a presale or buying a new crypto coin.
                    </p>
                    <br>
                    <p>
                        <b>To begin with, security audits are very important to check but you also need to verify the audits legitimacy too.</b>
                        <br>
                        However, most new coins have not been audited so you will need to do your own research.
                    </p>
                    <br>
                    <p>
                        <b>First point: always check the contract address of the coin you are buying. Is this the same one you saw on coinhunt?</b>
                        <br>
                        Before listing coins on coinhunt we do review them and try to eliminate scams (not a 100% science as we do not read the code) as much as we can, by using some requirements (See: https://coinhunt.cc/coinForm) But sometimes scammers will submit a coin with a contract that does fit into our requirements, and they will announce another contract address on their telegram later on, a contract that would never get listed on our platform. This is why, you should always double check if the contract address we display is the same with the one you are buying with. If not, something is wrong, you should probably run away.
                    </p>
                    <br>
                    <p>
                        <b>Here are some other important points to check:</b>
                    </p>
                    <br>
                    <p>
                        <b>Telegram:</b>
                         Check if the number of members in the tg group is botted or not. You can clearly see this by comparing the number of online members to the total number of members. If a telegram group has 8000 members but only a 100 online, chances are very high that it is botted, you may want to run away from these communities too..
                        </p>
                        <br>
                        <p>
                            <b>Bscscan:</b>
                             Check the "Holder" tab, try to see the percentage the top holders have, if a wallet has more than 10% you may want to consider this too risky to invest. This wallet could sell all of their coins, and it could have a huge impact (generally downwards) on the price. This can also cause panic and ultimately make everyone sell whatever they have. There are exceptions to this rule, for example:
                            </p>
                            <p>
                                - the locked pancakeswap liquidity
                                <br>
                                - 0x000...00dead address which is for burning coins, meaning that noone can ever sell those coins
                                <br>
                                - in case of presale/prelaunch, the presale wallet can also have more than 10% (presales are obviously always more risky investments)
                            </p>
                            <br>
                            <p>
                                <b>Poocoin: </b>
                                You can scan two particular scams via this website. You can check if there is a red warning message under the LP box, this box says something along "liquidity is not locked, the dev can take everything if they wish". In that case, this coin can be a future rugpull, you may wanna run away. On poocoin, you can also check for honeypots. Under the graph, you have all the sell and buy orders, check if different addresses are able to sell. Honeypot is a particular scam, where the developer has put a rule that only allows particular wallet adresses to sell, so if you only see buy orders and only a few sell orders (generally huge dumps), you may want to run away.
                            </p>
                            <br>
                            <p>
                                <b>Other than these more technical points,</b>
                                a management and developer team that communicates properly and that is transparent, an always working website, clean social media accounts that are professionally managed are all good points to check before considering if you should run away or not.
                            </p>
                        </div>
                    </section>
        </div>
    </div>
</div>
@endsection
