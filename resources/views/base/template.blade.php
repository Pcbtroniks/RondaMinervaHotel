<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PHS33GGP');</script>
        <!-- End Google Tag Manager -->
        <!-- Google tag (gtag.js) -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-TGBV6TW84F"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-TGBV6TW84F');
        </script> -->
        <!-- End Google tag (gtag.js) -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Ronda Minerva Hotel')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
          @vite('resources/css/app.css')

        <!-- Meta Tags -->

        <meta name="description" content="Ronda Minerva Hotel es una joya de la cultura de Jalisco, el corazón de al ciudad de Guadalajara, es un referente de la historia de la ciudad. A solamente unas calles de La Minerva, uno de los sitios más representativos del país">
        <meta name="keywords" content="Hotel, Guadalajara, Ronda Minerva, Minerva, Hospedaje, Viaje, Turismo, Jalisco, México">
        <meta name="author" content="Ronda Minerva Hotel">
        <meta name="robots" content="index, follow">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@RondaMinervaHtl">
        <meta name="twitter:creator" content="@RondaMinervaHtl">
        <meta name="twitter:title" content="Hotel Ronda Minerva">
        <meta name="twitter:description" content="Ronda Minerva Hotel es una joya de la cultura de Jalisco, el corazón de al ciudad de Guadalajara, es un referente de la historia de la ciudad. A solamente unas calles de La Minerva, uno de los sitios más representativos del país">
        <meta name="twitter:image" content="{{ asset('img/logos/Ronda_Minerva-logo-blackandorange.png') }}">
        <!-- Facebook -->
        <meta property="og:url" content="https://rondaminervahotel.com/">
        <meta property="og:title" content="Hotel Ronda Minerva">
        <meta property="og:description" content="Ronda Minerva Hotel es una joya de la cultura de Jalisco, el corazón de al ciudad de Guadalajara, es un referente de la historia de la ciudad. A solamente unas calles de La Minerva, uno de los sitios más representativos del país">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ asset('img/logos/Ronda_Minerva-logo-blackandorange.png') }}">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="512">
        <meta property="og:image:height" content="512">

        @yield('css')
    </head>
    <body class="antialiased">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHS33GGP"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        @yield('page')

        @yield('js')
        <!-- Chatbot -->
        <section class="w-full sm:w-auto fixed right-0 bottom-0 z-50 max-h-[144rem] overflow-y-hidden">
            <button id="chatBtn" class="z-20 text-white flex flex-col shrink-0 grow-0 justify-around 
                    fixed bottom-0 right-0 right-5 rounded-lg
                    mr-1 mb-5 lg:mr-5 lg:mb-5 xl:mr-10 xl:mb-10">
                <div class="p-3 rounded-full border-4 border-white bg-ronda-orange">
                <svg
                    class="w-10 h-10"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    fill-rule="evenodd"
                    d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                    clip-rule="evenodd"
                    ></path>
                </svg>
                </div>

            </button>
            <div id="chatBot" class="hidden max-w-md max-h-[144rem] mx-auto p-4">
                <!-- Chat Container -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <!-- Chat Header -->
                    <div class="flex items-center mb-4">
                    <div class="ml-3 w-full">
                        <div class="flex justify-between items-center w-full">
                            <p class="text-xl font-medium">Tu asistente de IA</p>
                            <span>
                                <button id="closeChatBtn" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </span>
                        </div>
                        <p class="text-gray-500">En línea</p>
                    </div>
                    </div>

                    <!-- Chat Messages -->
                    <div class="space-y-4 max-h-80 overflow-y-auto">
                        <!-- Received Message -->
                        <div class="flex items-start">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 100 100"
                                width="100"
                                height="100"
                                fill="#009688"
                                class="w-8 h-8 rounded-full"
                                >

                                <!-- Robot Face -->
                                <circle cx="50" cy="50" r="20" fill="#009688" />
                                <circle cx="50" cy="40" r="2" fill="#fff" />
                                <rect x="47" y="45" width="6" height="10" fill="#fff" />
                                <circle cx="50" cy="65" r="3" fill="#009688" />

                                <!-- Robot Eyes -->
                                <circle cx="45" cy="45" r="3" fill="#fff" />
                                <circle cx="55" cy="45" r="3" fill="#fff" />
                                <circle cx="45" cy="45" r="1" fill="#000" />
                                <circle cx="55" cy="45" r="1" fill="#000" />

                                <!-- Robot Antennas -->
                                <line x1="50" y1="30" x2="40" y2="20" stroke="#009688" stroke-width="2" />
                                <line x1="50" y1="30" x2="60" y2="20" stroke="#009688" stroke-width="2" />
                                </svg>
                            <div class="ml-3 bg-ronda-orange p-3 rounded-lg">
                            <p class="text-sm text-white">¡Buen dia!, ¿Como puede ayudarle hoy?</p>
                            </div>
                        </div>

                        <!-- Sent Message -->
                        <!-- <div class="hidden flex items-end justify-end">
                            <div class="bg-gray-100 p-3 rounded-lg">
                                <p class="text-sm text-white">¿A que hora es el checkin?</p>
                            </div>
                            <div>
                                <svg class="w-8 h-8 ml-3 mb-2" width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="User / User_Circle"> <path id="Vector" d="M17.2166 19.3323C15.9349 17.9008 14.0727 17 12 17C9.92734 17 8.06492 17.9008 6.7832 19.3323M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11C15 12.6569 13.6569 14 12 14Z" stroke="#f89e37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                            </div>
                            <img src="https://pbs.twimg.com/profile_images/1707101905111990272/Z66vixO-_normal.jpg" alt="Other User Avatar" class="w-8 h-8 rounded-full ml-3" />
                        </div> -->
                        <section id="chatResponses" class="space-y-4">

                        </section>
                    </div>

                    <!-- Chat Input -->
                    <div class="mt-4 space-y-2 sm:space-y-0 flex flex-col items-end sm:flex-row sm:items-center">
                        <input
                            type="text"
                            placeholder="Type your message..."
                            class="hidden flex-1 py-2 px-3 rounded-full bg-gray-100 focus:outline-none"
                        />
                        <select id="selectChatOption" class="flex-1 py-2 px-3 rounded-full bg-gray-100 focus:outline-none" name="" id="">
                            <option value="null" disabled selected>-- Seleccione una opción --</option>
                            <option value="checkin">¿A que hora es el Check-In?</option>
                            <option value="checkout">¿A que hora es el Check-Out?</option>
                            <option value="rooms">¿Que tipo de habitaciones tienen?</option>
                        </select>
                        <button id="sendChatBtn" class="bg-ronda-orange text-white px-4 py-2 rounded-full ml-3 hover:bg-ronda-dark-medium active:bg-ronda-dark">Enviar</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Chatbot -->
         <script>
            const chatBtn = document.getElementById('chatBtn');
            const chatBot = document.getElementById('chatBot');
            const closeChatBtn = document.getElementById('closeChatBtn');
            const sendChatBtn = document.getElementById('sendChatBtn');
            const selectChatOption = document.getElementById('selectChatOption');

            const ChatResponses = [
                {
                    question: '¿A que hora es el Check-In?',
                    answer: 'El Check-In es a las 3:00 PM',
                    label: 'checkin'
                },
                {
                    question: '¿A que hora es el Check-Out?',
                    answer: 'El Check-Out es a las 12:00 PM',
                    label: 'checkout'
                },
                {
                    question: '¿Que tipo de habitaciones tienen?',
                    answer: 'Tenemos habitaciones sencillas, dobles y triples',
                    label: 'rooms'
                }
            ];

            const ChatResponseHtml = (question, answer) => {
                return `
                    <!-- Sent Message -->
                    <div class="flex items end justify-end">
                        <div class="bg-gray-100 p-3 rounded-lg">
                            <p class="text-sm text-gray-800">${question}</p>
                        </div>
                        <div>
                            <svg class="w-8 h-8 ml-3 mb-2" width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="User / User_Circle"> <path id="Vector" d="M17.2166 19.3323C15.9349 17.9008 14.0727 17 12 17C9.92734 17 8.06492 17.9008 6.7832 19.3323M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21ZM12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11C15 12.6569 13.6569 14 12 14Z" stroke="#f89e37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
                        </div>
                    </div>
                    <!-- Received Message -->
                        <div class="flex items-start">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 100 100"
                                width="100"
                                height="100"
                                fill="#009688"
                                class="w-8 h-8 rounded-full"
                                >

                                <!-- Robot Face -->
                                <circle cx="50" cy="50" r="20" fill="#009688" />
                                <circle cx="50" cy="40" r="2" fill="#fff" />
                                <rect x="47" y="45" width="6" height="10" fill="#fff" />
                                <circle cx="50" cy="65" r="3" fill="#009688" />

                                <!-- Robot Eyes -->
                                <circle cx="45" cy="45" r="3" fill="#fff" />
                                <circle cx="55" cy="45" r="3" fill="#fff" />
                                <circle cx="45" cy="45" r="1" fill="#000" />
                                <circle cx="55" cy="45" r="1" fill="#000" />

                                <!-- Robot Antennas -->
                                <line x1="50" y1="30" x2="40" y2="20" stroke="#009688" stroke-width="2" />
                                <line x1="50" y1="30" x2="60" y2="20" stroke="#009688" stroke-width="2" />
                                </svg>
                            <div class="ml-3 bg-ronda-orange p-3 rounded-lg">
                            <p class="text-sm text-white">${answer}</p>
                            </div>
                        </div>
                `;
            }

            const GetChatResponse = (question) => {
                const chatResponse = ChatResponses.find((response) => response.label === question);
                if (!chatResponse) {
                    return 'No tengo respuesta para esa pregunta';
                }
                return chatResponse.answer;
            }
            const GetChatQuestion = (question) => {
                const chatResponse = ChatResponses.find((response) => response.label === question);
                if (!chatResponse) {
                    return 'No tengo respuesta para esa pregunta';
                }
                return chatResponse.question;
            }

            const AddChatResponse = (question, answer) => {
                const chatResponses = document.getElementById('chatResponses');
                chatResponses.innerHTML += ChatResponseHtml(GetChatQuestion(question), GetChatResponse(question));
            }

            const AddChatResponseByLabel = (label) => {
                const chatResponses = document.getElementById('chatResponses');
                const chatResponse = ChatResponses.find((response) => response.label === label);
                chatResponses.innerHTML += ChatResponseHtml(chatResponse.question, chatResponse.answer);
            }

            const GetSelectedValue = () => {
                const selectedValue = selectChatOption.value;
                if (selectedValue === 'null') {
                    alert('Seleccione una opción');
                    return;
                }
                AddChatResponseByLabel(selectedValue);
            }

            sendChatBtn.addEventListener('click', GetSelectedValue);

            closeChatBtn.addEventListener('click', () => {
                chatBot.classList.toggle('hidden');
                chatBtn.classList.toggle('hidden');
            });

            chatBtn.addEventListener('click', () => {
                chatBot.classList.toggle('hidden');
                chatBtn.classList.toggle('hidden');
            });
         </script>
    </body>
</html>
