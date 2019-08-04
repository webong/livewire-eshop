@extends('layouts.app')

@section('content')
<div>
    <div>
        <div class="wrapper">
            <nav>
                <div class="capsule">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" aria-labelledby="shopicon"
                            role="presentation" width="60" height="60" class="logo">
                            <title id="shopicon">
                                LiveWire Shop
                            </title>
                            <g fill="black">
                                <path
                                    d="M82.89 42.69c0-.07 0-.15.05-.22a3.87 3.87 0 0 0 0-.39v-3.91a1 1 0 0 0-.07-.34v-.08a1 1 0 0 0 0-.09l-7.33-11.9a1 1 0 0 0-.86-.48h-3.56v-2.35a1 1 0 0 0-1-1h-4.49v-1.14a1 1 0 0 0-1-1H35.37a1 1 0 0 0-1 1v1.14h-4.49a1 1 0 0 0-1 1v2.35h-2.66a1 1 0 0 0-.82.43l-3.95 5.72-4.27 6.17a1 1 0 0 0-.07.13v.08a1 1 0 0 0-.07.34v3.93a3.86 3.86 0 0 0 0 .39c0 .08 0 .15.05.23a3.74 3.74 0 0 0 .13.44l.06.14a3.68 3.68 0 0 0 .26.51 3.67 3.67 0 0 0 .89 1l.11.07a3.66 3.66 0 0 0 .38.24l.3.14.13.06c0 .34-.07.69-.1 1s-.05.47-.07.71c-.06.76-.09 1.53-.09 2.29a30.61 30.61 0 0 0 5.4 17.4 29.79 29.79 0 0 0 5.39 6 30.8 30.8 0 0 0 40.23 0q.76-.65 1.48-1.35a30 30 0 0 0 3.89-4.66 30.61 30.61 0 0 0 5.36-17.36c0-.76 0-1.53-.09-2.29 0-.24 0-.48-.07-.71s-.06-.69-.1-1l.25-.11h.09a3.66 3.66 0 0 0 1.76-1.89v-.12a3.72 3.72 0 0 0 .21-.52zm-9.2 23.13c-.17.24-.35.48-.52.72s-.29.41-.45.6-.45.55-.68.83-.3.36-.45.54-.55.6-.84.89l-.37.39-.17.15V53.71a1 1 0 0 0-1-1H56.4a1 1 0 0 0-1 1V71H30.91q-.66-.58-1.28-1.2l-.4-.42c-.28-.28-.55-.57-.82-.87s-.3-.36-.45-.53-.47-.55-.69-.83-.3-.4-.44-.6-.35-.48-.52-.72V45.56h47.37zM68.2 71H57.4V54.71h10.8zm11.2-27.45h-5.54v-4.38H81v2.66a1.71 1.71 0 0 1-1.6 1.72zm-58.8 0a1.71 1.71 0 0 1-1.6-1.72v-2.66h7.13v4.39h-5.52zm43-20.61v7.82H36.38v-9h27.24v1.16zM28.9 36.9l4.86-9.62h.61v4.48a1 1 0 0 0 1 1H37l-1.4 4.4h-6.83zm16.23-4.13l-.58 4.4h-6.9l1.4-4.4zm2 0h6.13l.24 4.4h-6.93zm8.37 4.4l-.24-4.4h6.11l1.06 4.4zm-11.09 2v4.39h-7.13v-4.39zm2 0h7.14v4.39h-7.12zm9.14 0h7.14v4.39h-7.12zm8.93-2l-1.06-4.4h1.18a1 1 0 0 0 1-1v-4.49h1.48l1 2.4 3.21 7.49zm-36.36 2h7.14v4.39h-7.12zm36.58 4.39v-4.39h7.15v4.39zm8.8-6.39l-.12-.28-4.11-9.61h4.84l6.08 9.89zm-4.39-11.89h-3.48v-1.35h3.48zm-34.74 0h-3.48v-1.35h3.48zm-7.63 2h4.77l-3.92 7.77-1.07 2.12h-6.61l3.29-4.77zM21.22 47.2c0-.23 0-.45.07-.67s.08-.65.12-1h2.92v16.95a28.63 28.63 0 0 1-3.19-13.14c-.01-.71.02-1.43.08-2.14zm33.29 30.66a29.17 29.17 0 0 1-9 0 28.57 28.57 0 0 1-12-4.87h33.1a28.57 28.57 0 0 1-12.1 4.87zm21.17-15.38V45.56h2.92c0 .32.09.64.12 1s.05.45.07.67c.05.71.09 1.43.09 2.14a28.63 28.63 0 0 1-3.2 13.11z">
                                </path>
                                <path
                                    d="M52.74 50H30.8a1 1 0 0 0-1 1v14.59a1 1 0 0 0 1 1h21.94a1 1 0 0 0 1-1V51a1 1 0 0 0-1-1zm-1 14.63H31.8V52h19.94zM60.08 62.94h5.44a1 1 0 0 0 1-1v-2.75a1 1 0 0 0-1-1h-5.44a1 1 0 0 0-1 1v2.74a1 1 0 0 0 1 1.01zm1-2.74h3.44v.74h-3.44z">
                                </path>
                            </g>
                        </svg>
                    </a>
                    <ul>
                        <a href="/women">
                            <li>Women's</li>
                        </a>
                        <a href="/men">
                            <li>Men's</li>
                        </a>
                        <a href="/sale">
                            <li>Sale</li>
                        </a>
                    </ul>
                    <div class="cart-dropdown">
                        <div v-if="cartTotal > 0" class="cartcount"> 4 </div>
                        <svg class="cart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" aria-labelledby="shopicon"
                            role="presentation" width="30" height="30">
                            <title id="cart">
                                Shopping Cart
                            </title>
                            <path fill="black"
                                d="M8.01 10c-1.104 0-2 .896-2 2 0 1.105.896 2 2 2h10.376l10.53 49.813c-.107 1.14.952 2.245 2.095 2.187h50c1.057.015 2.03-.943 2.03-2s-.973-2.015-2.03-2H32.637l-1.688-8H85.01c.896-.01 1.742-.69 1.938-1.562l7-30c.26-1.16-.748-2.43-1.937-2.438H23.76l-1.78-8.437c-.2-.884-1.063-1.57-1.97-1.563zm16.594 14H89.51l-6.093 26H30.104zM42.01 72c-4.946 0-9 4.053-9 9s4.054 9 9 9c4.948 0 9-4.053 9-9s-4.052-9-9-9zm28 0c-4.946 0-9 4.053-9 9s4.054 9 9 9c4.948 0 9-4.053 9-9s-4.052-9-9-9zm-28 4c2.786 0 5 2.215 5 5s-2.214 5-5 5c-2.784 0-5-2.215-5-5s2.216-5 5-5zm28 0c2.786 0 5 2.215 5 5s-2.214 5-5 5c-2.784 0-5-2.215-5-5s2.216-5 5-5z">
                            </path>
                        </svg>
                        <div class="cart-content">
                            @include('cart')
                        </div>
                    </div>
                </div>
            </nav>

            <main class="capsule">
                <div class="masthead" style="background:#3b60ed;">
                    <img src="/banner-ppl.png" alt="Banner Image" class="ppl-banner">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1367.57 190.59" preserveAspectRato="none"
                        role="presentation" class="bk">
                        <path
                            d="M1-5.7c26.29,0,52.59.07,78.88,0a13.65,13.65,0,0,1,8,2.25,85.25,85.25,0,0,1,19.56,17.1c9.32,11.46,6.88,35.64-9.63,43.28-13.87,6.43-28.32,9.78-43.33,11.41C36.52,70.29,18.7,69.25,1,66.53Z"
                            transform="translate(-0.95 5.75)" style="fill: #fe3a25"></path>
                        <path
                            d="M1368.52,80.78c-5.4-1.17-11-1-16.31-2.88s-6.07-3.28-4.68-8.82.34-7.87-5.16-9.87c-5.33-1.94-10.86-3.37-16.18-5.35-10.6-3.93-19-10.53-24.43-20.67-1.2-2.25-2.6-4.55-2.19-7.14.7-4.39-1.64-6.79-5-8.8-8.53-5.16-17.66-9.17-26.49-13.76-4.75-2.47-9.62-4.75-13.94-8.13,1.08-1.48,2.43-.78,3.53-.78,25.81,0,51.62,0,77.43-.1,3,0,4.94.61,6.51,3.36a28.59,28.59,0,0,0,13.63,12.05c4.46,2,8.83,4.17,13.24,6.27Z"
                            transform="translate(-0.95 5.75)" style="fill: #fe3a25"></path>
                            <path
                            d="M1060-5.65c28.66,0,56,0,83.38,0a3.46,3.46,0,0,1,3.52,2.47c5.25,11.77,14.4,19.2,26,24.43a120.59,120.59,0,0,1,29.81,19.24c11.73,10.27,18.86,22.91,19.29,38.75.15,5.53,3.51,8.22,7.76,10.32,8.66,4.27,14.35,11.26,18.39,19.76a29.06,29.06,0,0,1,2.26,6.72c1.22,6.35-1.89,10.12-8.35,10.34a36.73,36.73,0,0,1-13-2.4c-23.47-8-43.56-21-59.29-40.26-9.44-11.53-20.14-20.56-34.83-25a43,43,0,0,1-27.18-22.93c-1.47-3-2.7-6-2-9.54s-1.62-5.25-4-6.93c-8.27-5.88-17.35-10.4-26.16-15.38C1070.65,1.15,1065.45-1.19,1060-5.65Z"
                            transform="translate(-0.95 5.75)" style="fill: #53be32"></path>

                            <path
                            d="M1246.48,127.21c4.46,3.79,8.85,7.68,13.41,11.34,5.62,4.53,11.83,5.91,18.58,2.58s12.78-1.78,18.46,2.79a88.76,88.76,0,0,1,19.86,22.17,29.91,29.91,0,0,1,3.68,8.19c1.58,5.92-.81,9.53-6.92,10.36-4.15.55-8.24-.15-12.25-1a88.26,88.26,0,0,0-33.5-.66c-14.87,2.68-28.51-.7-41.84-6.94-22.58-10.59-42.23-25.43-60.85-41.76C1143.63,115.46,1123.77,95.09,1108,71c-5.83-8.9-10.86-18.21-12.76-28.87a23.44,23.44,0,0,1,.22-10.34c3.15-11.87,12.11-16.31,23.25-11.25a60,60,0,0,1,20.71,15.64c11.66,13.57,26,24,39.62,35.32,4.86,4,9.85,7.94,14.78,11.91-4.63,2.68-8.39,5.94-9.77,11.53-5.1,20.5,11.63,42.56,32.77,43.12C1228.21,138.4,1237.65,133.68,1246.48,127.21Z"
                            transform="translate(-0.95 5.75)" style="fill: #758ee2"></path>
                        <path
                            d="M261.84,174.13c-13.37-5.54-29.23-1.89-45-1.77-8.29.07-15.39-3.84-21.47-9a359.35,359.35,0,0,1-65-72,30.88,30.88,0,0,1-4.18-8.48c-1.34-4.51.44-6.5,5-5.21a37.81,37.81,0,0,1,15,7.73c15.51,13.52,31.19,26.85,48.54,38,2.25,1.45,4.64,2.72,7,4,3.62,1.91,6.86,2,10.47-.76,5.37-4.14,11.56-3.71,17.62-1.35,7.2,2.8,13.12,7.56,18.73,12.73,6.88,6.35,13.28,13.14,18.28,21.12a35.38,35.38,0,0,1,3.18,6.33C272.33,171.44,270.27,174.3,261.84,174.13Z"
                            transform="translate(-0.95 5.75)" style="fill: #fe3a25"></path>
                            <path
                            d="M895.1,155.77c-4.75-4.23-9.12-8.83-12.22-14.39-2.7-4.84-1.2-7.9,4.17-8.9a50.18,50.18,0,0,1,6.62-.35c9.64-.45,17.79-8.48,17.81-17.56,0-5.54-1.87-8.91-7.86-13.23-9.22-6.67-18.66-13.06-27.8-19.85-24.6-18.28-51.37-33.58-74.17-54.36-6.29-5.75-13.64-10.31-22.19-12.34-10.94-2.6-18.56,5.28-15.64,16.07,1.78,6.56,5.35,12.14,9.28,17.5,11.75,16,26.42,29.4,40.38,43.4,9.9,9.94,8.64,15.22-4.91,19.35-6.94,2.11-14,3.72-21,5.79-3.14.94-6.8,2-7.17,6-.35,3.81,2.3,6.4,5.12,8.56a26.13,26.13,0,0,0,4.45,2.7c5.57,2.74,11.55,4.21,17.57,5.57,15.15,3.43,30,7.21,42.42,17.62,7.24,6.09,14.33,12.34,21.37,18.65H920C911.49,169.55,903.11,162.9,895.1,155.77Z"
                            transform="translate(-0.95 5.75)" style="fill: #75d8d0"></path>
                            <path
                            d="M748.31,123.68c14.77.31,27.3,2.41,39.17,7.74a45.65,45.65,0,0,1,11.27,6.91c8.94,7.68,9.74,17.32,1.91,26.14-7.33,8.24-17,12.47-27.5,14.81-15.19,3.4-29.28.91-41.35-9.41-8-6.81-12.22-15.59-12.09-26.22.1-8.51,3.88-13.93,11.82-17.05a31.45,31.45,0,0,1,5.9-1.75C741.63,124.09,745.87,123.49,748.31,123.68Z"
                            transform="translate(-0.95 5.75)" style="fill: #fe3a25"></path>
                        <path
                            d="M423,26.26c-2.71-3.56-6.63-5.17-10.64-6.65-9.88-3.65-19.22-8.08-24.78-17.76-1.33-2.31-2.82-4.58-2.75-7.42l58.89-.13a6.07,6.07,0,0,1,3.61.88c13.46,9,24.61,19.63,25.22,37.29.16,4.67,2.39,7.51,6.43,9.6,7.75,4,12.28,10.82,14.71,19,1.82,6.11-1.1,9.53-7.48,9.23-4-.18-7.74-1.53-11.42-3a100.94,100.94,0,0,1-43.05-31.72C429.11,32.25,426.45,28.89,423,26.26Z"
                            transform="translate(-0.95 5.75)" style="fill: #6fb859"></path>
                        <path
                            d="M618.36-5.69c26.94,0,52.87,0,78.8-.06,2.58,0,3.52,1,4.19,3.27,5.35,18.42-9.74,34.88-29.05,31.59-14.37-2.44-26-10.26-37.15-19A125.55,125.55,0,0,1,618.36-5.69Z"
                            transform="translate(-0.95 5.75)" style="fill: #fe3a25"></path>
                        <path
                            d="M576.6,166.37c-9.69-14.55-21.23-27.62-33.7-39.77a81,81,0,0,0-30.38-18.95c-4-1.35-8.54-3.09-12.08.51-3.27,3.32-1.25,7.44-.26,11.23.08.3.25.58.32.89,1.21,4.74-.39,6.37-5.13,4.9a53.63,53.63,0,0,1-13.45-6.94,460.36,460.36,0,0,1-67.6-55.12,53.43,53.43,0,0,1-8.24-10.4c-4.39-7.25-3.32-11.48,4-15.61a37.66,37.66,0,0,1,6.43-3c3.85-1.31,6.09-3.78,6.55-7.83-2.71-3.56-6.63-5.17-10.64-6.65-9.88-3.65-19.22-8.08-24.78-17.76-1.33-2.31-2.82-4.58-2.75-7.42H280.77c5.05,5.3,9.78,10.18,14.4,15.16,4.36,4.69,8.4,9.71,8.84,16.39.52,7.74,3.56,14.35,8.05,20.44,8.77,11.92,19.2,22.3,30,32.36,12.38,11.57,25.71,22.08,37.63,34.16a31.74,31.74,0,0,1,6.28,8.28c1.86,3.79.58,6.39-3.06,8.08-2.84,1.32-5.89,1.11-8.88,1.08-14.15-.18-27.9-3.53-41.83-5.43-6.59-.89-13.18-1.79-19.86-1.41-8.54.49-10.77,4.56-6.35,11.76,1.41,2.29,3,4.46,4.62,6.61,7.65,10.26,17.7,18,27.29,26.29,6.6-.1,13.2,0,19.58,1.89,4.69,1.41,8.25,3.33,10.81,5.91H581.73A44.12,44.12,0,0,0,576.6,166.37Z"
                            transform="translate(-0.95 5.75)" style="fill: #758ee2"></path>
                            <path
                            d="M575.82,38.08A39.5,39.5,0,0,1,595,42.69c18.58,9.78,33.85,23.2,44.54,41.48a38.31,38.31,0,0,1,4.31,10.49c1.5,6.29-.31,8.07-6.47,6.39-5.7-1.56-10.88-4.32-16-7.21a313.2,313.2,0,0,1-43.66-30.19c-4.54-3.71-8.8-7.77-11.91-12.82-4.52-7.34-2-12.08,6.65-12.74C573.6,38,574.72,38.08,575.82,38.08Z"
                            transform="translate(-0.95 5.75)" style="fill: #758ee2"></path>
                    </svg>
                    <h1>Shoppity</h1>
                </div>
                <div class="contain">
                    <aside>
                        <div class="sidearea">
                            <label for="pricerange">Highest Price:
                                <span>$300</span>
                            </label>
                            <input id="pricerange" type="range" min="0" max="400"
                                step="0.1" value="300" class="slider">
                                <span class="min">$0</span>
                                <span class="max">$400</span>
                            </div>
                        <div class="sidearea">
                            <h4>Only Show Sale Items</h4>
                            <div class="can-toggle demo-rebrand-2">
                                <input id="e" type="checkbox">
                                <label for="e">
                                    <div data-checked="Yes" data-unchecked="No" class="can-toggle__switch"></div>
                                </label>
                            </div>
                        </div>
                        <div class="sidearea callout">
                            <h4>Special Sale!</h4>
                            <p>Shop now because half our items are greatly reduced</p>
                        </div>
                        <div class="sidearea callout">
                            <h4>Contact Us</h4>
                            <p>Questions? Call us at 1-888-555-SHOP, we're happy to be of service.</p>
                        </div>
                    </aside>
                    <section class="content">
                        <div class="item">
                            <p>Khaki Suede Polish Work Boots</p>
                            <span class="salepill">Sale</span>
                            <img src="/shoe1.png" alt="Image of Khaki Suede Polish Work Boots">
                            <p>$149.99</p>
                            <button class="add">Add Item</button>
                        </div>
                        <div class="item">
                            <p>Camo Fang Backpack Jungle</p>
                            <img src="/jacket1.png" alt="Image of Camo Fang Backpack Jungle">
                            <p>$39.99</p><button class="add">Add Item</button>
                        </div>
                        <div class="item">
                            <p>Parka and Quilted Liner Jacket</p>
                            <span class="salepill">Sale</span>
                            <img src="/jacket2.png" alt="Image of Parka and Quilted Liner Jacket">
                            <p>$49.99</p>
                            <button class="add">Add Item</button>
                        </div>
                        <div class="item">
                            <p>Camo Fang Backpack Jungle</p>
                            <img src="/jacket1.png" alt="Image of Camo Fang Backpack Jungle">
                            <p>$39.99</p><button class="add">Add Item</button>
                        </div>
                    </section>
                </div>
            </main>

            <div class="clear"></div>
            <div class="push"></div>
        </div>
        <footer class="footer">
            Made with 🎸 from 
            <a href="https://twitter.com/sarah_edo" target="_blank">sarah_edo</a>.
            This project is open source, visit 
            <a href="https://github.com/sdras/sample-vue-shop" target="_blank">the repo.</a>
        </footer>
    </div>
</div>
<script type="text/javascript">
    window.__NUXT__ = {
        "layout": "default",
        "data": [{}],
        "error": null,
        "state": {
            "cartTotal": 0,
            "cart": [],
            "sale": false,
            "products": [{
                "name": "Khaki Suede Polish Work Boots",
                "price": 149.99,
                "category": "women",
                "sale": true,
                "article": "shoe",
                "img": "shoe1.png"
            }, {
                "name": "Camo Fang Backpack Jungle",
                "price": 39.99,
                "category": "women",
                "sale": false,
                "article": "jacket",
                "img": "jacket1.png"
            }, {
                "name": "Parka and Quilted Liner Jacket",
                "price": 49.99,
                "category": "men",
                "sale": true,
                "article": "jacket",
                "img": "jacket2.png"
            }, {
                "name": "Cotton Black Cap",
                "price": 12.99,
                "category": "men",
                "sale": true,
                "article": "hats",
                "img": "hat1.png"
            }, {
                "name": "Knit Sweater with Zips",
                "price": 29.99,
                "category": "women",
                "sale": false,
                "article": "sweater",
                "img": "sweater1.png"
            }, {
                "name": "Long Linen-blend Shirt",
                "price": 18.99,
                "category": "men",
                "sale": false,
                "article": "shirt",
                "img": "shirt1.png"
            }, {
                "name": "Knit Orange Sweater",
                "price": 28.99,
                "category": "men",
                "sale": false,
                "article": "sweater",
                "img": "sweater2.png"
            }, {
                "name": "Cotton Band-collar Blouse",
                "price": 49.99,
                "category": "men",
                "sale": false,
                "article": "shirt",
                "img": "shirt2.png"
            }, {
                "name": "Camo Fang Backpack Jungle",
                "price": 59.99,
                "category": "women",
                "sale": true,
                "article": "jacket",
                "img": "jacket3.png"
            }, {
                "name": "Golden Pilot Jacket",
                "price": 129.99,
                "category": "women",
                "sale": false,
                "article": "jacket",
                "img": "jacket4.png"
            }, {
                "name": "Spotted Patterned Sweater",
                "price": 80.99,
                "category": "women",
                "sale": false,
                "article": "jacket",
                "img": "sweater4.png"
            }, {
                "name": "Double Knit Sweater",
                "price": 59.99,
                "category": "men",
                "sale": true,
                "article": "jacket",
                "img": "sweater5.png"
            }]
        },
        "serverRendered": true
    };

</script>
@endsection