<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">

    @vite('resources/js/app.js')
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
<div id="app">
    <div class="flex h-screen antialiased text-gray-800">
        <div class="flex flex-row h-full w-full overflow-x-hidden">
            <div class="flex flex-col py-8 pl-6 pr-2 w-64 bg-white flex-shrink-0">
                <div class="flex flex-row items-center justify-center h-12 w-full">
                    <div class="ml-2 font-bold text-2xl">QuickChat</div>
                </div>
                <div
                        class="flex flex-col items-center bg-indigo-100 border border-gray-200 mt-4 w-full py-6 px-4 rounded-lg"
                >
                    <div class="h-20 w-20 rounded-full border overflow-hidden">
                        <img
                                src="https://avatars3.githubusercontent.com/u/2763894?s=128"
                                alt="Avatar"
                                class="h-full w-full"
                        />
                    </div>
                    <div class="text-sm font-semibold mt-2">Aminos Co.</div>
                    <div class="text-xs text-gray-500">Lead UI/UX Designer</div>
                    <div class="flex flex-row items-center mt-3">
                        <div
                                class="flex flex-col justify-center h-4 w-8 bg-indigo-500 rounded-full"
                        >
                            <div class="h-3 w-3 bg-white rounded-full self-end mr-1"></div>
                        </div>
                        <div class="leading-none ml-1 text-xs">Active</div>
                    </div>
                </div>
                <div class="flex flex-col mt-8">
                    <div class="flex flex-row items-center justify-between text-xs">
                        <span class="font-bold">Active Conversations</span>
                        <span
                                class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full"
                        >4</span
                        >
                    </div>
                    <div class="flex flex-col space-y-1 mt-4 -mx-2 h-48 overflow-y-auto">
                        <button
                                class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
                        >
                            <div
                                    class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full"
                            >
                                H
                            </div>
                            <div class="ml-2 text-sm font-semibold">Henry Boyd</div>
                        </button>
                        <button
                                class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
                        >
                            <div
                                    class="flex items-center justify-center h-8 w-8 bg-gray-200 rounded-full"
                            >
                                M
                            </div>
                            <div class="ml-2 text-sm font-semibold">Marta Curtis</div>
                            <div
                                    class="flex items-center justify-center ml-auto text-xs text-white bg-red-500 h-4 w-4 rounded leading-none"
                            >
                                2
                            </div>
                        </button>
                        <button
                                class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
                        >
                            <div
                                    class="flex items-center justify-center h-8 w-8 bg-orange-200 rounded-full"
                            >
                                P
                            </div>
                            <div class="ml-2 text-sm font-semibold">Philip Tucker</div>
                        </button>
                        <button
                                class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
                        >
                            <div
                                    class="flex items-center justify-center h-8 w-8 bg-pink-200 rounded-full"
                            >
                                C
                            </div>
                            <div class="ml-2 text-sm font-semibold">Christine Reid</div>
                        </button>
                        <button
                                class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
                        >
                            <div
                                    class="flex items-center justify-center h-8 w-8 bg-purple-200 rounded-full"
                            >
                                J
                            </div>
                            <div class="ml-2 text-sm font-semibold">Jerry Guzman</div>
                        </button>
                    </div>
                    <div class="flex flex-row items-center justify-between text-xs mt-6">
                        <span class="font-bold">Archivied</span>
                        <span
                                class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full"
                        >7</span
                        >
                    </div>
                    <div class="flex flex-col space-y-1 mt-4 -mx-2">
                        <button
                                class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2"
                        >
                            <div
                                    class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full"
                            >
                                H
                            </div>
                            <div class="ml-2 text-sm font-semibold">Henry Boyd</div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col flex-auto h-full p-6">
                <div
                        class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4"
                >
                    <div class="flex flex-col h-full overflow-x-auto mb-4">
                        <div class="flex flex-col h-full">
                            <chat-component :user="{{ auth()->user() }}"></chat-component>
                        </div>
                    </div>
                    <send-chat-component></send-chat-component>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
