<html>
    <head>
        <!-- <base href="https://jeremy--askavawidget.netlify.app"> -->

        <script>
            function avaOnload() {
                console.log("avaOnload()");
                const logEvent = (msg) => {
                    console.log("Events:", msg);
                }
                askAva.events({
                    widgetOpened: () => {
                        logEvent("Widget Opened");
                    },
                    widgetClosed: () => {
                        logEvent("Widget Closed");
                    },
                    creditToolSubmit: () => {
                        logEvent("Credit Tool Submitted");
                    },
                    tradeToolSubmit: () => {
                        logEvent("Trade Tool Submitted");
                    },
                    creditReportReceived: () => {
                        logEvent("Credit Report Received");
                    },
                    creditAppSubmit: () => {
                        logEvent("Credit App Submitted");
                    },
                })
            }
            window.askAva = window.askAva || {
                onload: avaOnload,
            }
        </script>
        <script
            type="application/javascript"
            src="https://assets.askava.ai/v2/api.js?widgetId=21f828a846e5"
            async
            defer
        ></script>

        <!-- <link rel="stylesheet" href="/v1/cta/banner/5100b7b26ca4.css" />
        <link rel="stylesheet" href="/v1/cta/banner/ab2f39bd023b.css" />
        <link rel="stylesheet" href="/v1/cta/inline/64cdc1b08bfd.css" />
        <link rel="stylesheet" href="/v1/cta/inline/8949d45b2354.css" />
        <link rel="stylesheet" href="/v1/cta/inline/91cf2b27c20e.css" />
        <link rel="stylesheet" href="/v1/cta/floating/a5f9395a7f5d.css" />
        <link rel="stylesheet" href="/v1/cta/tradeTool/6c7ac3e3b350.css" /> -->
        <!-- <link rel="stylesheet" href="/v1/cta/tradeTool/bde653fe1e97.css" /> -->

        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <style>
            body,
            html {
                margin: 0;
            }
            .divider {
                padding-top: 50px;
            }
            .x-container {
                margin: auto;
                /* height: 215px; */
            }
            .w-container {
                margin-left: auto;
                margin-right: auto;
                max-width: 940px;
            }
            .wp img {
                max-width: 100%;
                height: auto;
                vertical-align: middle;
            }

            .wp h3 {
                font-size: 1.125em;
            }

            button {
                width: 600rem !important;
                display: none;
                position: absolute;
            }
        </style>
    </head>

    <body style="height:5000%">
        <!-- <div class="wp">
            <div
                class="AskAva-cta"
                data-product="creditTool"
                data-type="floating"
                data-theme="black"
            ></div>
        </div> -->

        <!-- <div
            class="AskAva-cta"
            data-product="creditTool"
            data-type="banner"
        ></div>
        <div
            class="AskAva-cta"
            data-product="creditTool"
            data-type="banner"
            data-theme="black"
        ></div> -->

        <div
            class="AskAva-cta"
            data-product="tradeTool"
            data-type="banner"
        ></div>

      
<!--         <div class="divider"></div>
        <section class="w-container">
            <div
                class="AskAva-embed"
                data-product="tradeTool"
                data-no-styles
            ></div>
        </section> -->

        <!-- <div class="divider"></div>
        <section class="x-container">
            <div
                id="tradeTool-6c7ac3e3b350"
                class="QVZBV0lER0VUCg _a0b8a3cf6e5d"
            ></div>
        </section> -->

        <!-- <div class="divider"></div>
        <section class="x-container">
            <div
                id="tradeTool-bde653fe1e97"
                class="QVZBV0lER0VUCg _7e1bfc2d241e"
            ></div>
        </section> -->

    </body>
</html>
