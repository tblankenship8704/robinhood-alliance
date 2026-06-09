<!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
<div class="menu-size" style="height:440px;">
    <form id="withdraw_form">
        <div class="d-flex mx-3 mt-3 py-1">
            <div class="align-self-center">
                <h1 class="mb-0">Withdraw Assets</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#" class="ps-4 shadow-0 me-n2" data-bs-dismiss="offcanvas">
                    <i class="bi bi-x color-red-dark font-26 line-height-xl"></i>
                </a>
            </div>
        </div>
        <div class="divider divider-margins mt-3"></div>
        <div class="content mt-0">
            <div class="form-custom form-label form-icon">
                <i class="bi bi-wallet2 font-14"></i>
                <select required name="crypto_wallet" class="walletselect form-select rounded-xs" id="" aria-label="Floating label select example">
                    <option class="opt" selected value="">Select Wallet</option>
                    <option class="opt" value="bitcoin">Bitcoin 0.0000</option>
                    <option class="opt" value="stellar">Stellar 0.0000</option>
                    <option class="opt" value="ethereum">Ethereum 0.0000</option>
                    <option class="opt" value="tether">USDT (TRC20) 0.0000</option>
                    <option class="opt" value="stellar">Tron 0.0000</option>
                    <option class="opt" value="ripple">Ripple 0.0000</option>
                    <option class="opt" value="binancecoin">Binancecoin 0.0000</option>
                    <option class="opt" value="cardano">Cardano 0.0000</option>
                    <option class="opt" value="polygon-ecosystem-token">Matic 0.0000</option>
                    <option class="opt" value="algorand">Algorand 0.0000</option>
                    <option class="opt" value="shiba-inu">SHIBA 0.0000</option>
                    <option class="opt" value="litecoin">Litecoin 0.0000</option>
                    <option class="opt" value="doge">Doge 0.0000</option>
                    <option class="opt" value="tron">SHIBA 0.0000</option>
                    <option class="opt" value="solana">Solana 0.0000</option>
                    <option class="opt" value="pepe">Pepe 0.0000</option>
                    <option class="opt" value="official_trump">Official Trump 0.0000</option>
                </select>
                <label for="c6" class="form-label-always-active color-highlight font-11">Choose Wallet</label>
            </div>

            <div class="pb-3"></div>

            <div class="form-custom form-label form-icon">
                <i id="formicon" class="formicon bi bi-currency-bitcoin font-14"></i>
                <select required name="withdraw_format" class="form-select rounded-xs tokenSelect" id="tokenSelect" aria-label="Floating label select example">
                    <option class="opt" selected value="">Select Format</option>
                    <option class="opt" value="Crypto">Crypto</option>
                    <option class="opt" value="fiat">Fiat Currency</option>
                </select>
                <label for="tokenSelect" class="form-label-always-active color-highlight font-11">Choose withdraw format</label>
            </div>

            <div class="pb-3"></div>
            <div class="form-custom form-label form-icon">
                <i id="amtid" class="amtid bi bi-currency-bitcoin font-14"></i>
                <input required name="amount" type="text" class="numberinput form-control rounded-xs" id="c4" placeholder="150.00" />
                <label for="c4" class="form-label-always-active color-highlight font-11">Amount</label>
                <span id="tokencurrency" class="tokencurrency font-10"></span>
            </div>

            <div class="pb-3"></div>
            <div class="form-custom form-label form-icon">
                <i class="bi bi-wallet font-14"></i>
                <input required name="wallet_address" type="text" class="form-control rounded-xs" id="c4" placeholder="Enter Wallet Address" />
                <label for="c4" class="form-label-always-active color-highlight font-11">Wallet Address</label>
                <span class="font-10">Required</span>
            </div>

        </div>
        <a href="#" disabled id="withdraw" type="submit" class="mx-3 mb-3 btn btn-full gradient-green shadow-bg shadow-bg-s">
            Proceed</a>
    </form>
</div>