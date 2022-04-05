<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        <a href="{{ url('/moduleone') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Modulo Uno</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    {{-- <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg> --}}
                    <?xml version="1.0" encoding="UTF-8" standalone="no"?>
                    <svg
                       xmlns:dc="http://purl.org/dc/elements/1.1/"
                       xmlns:cc="http://creativecommons.org/ns#"
                       xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                       xmlns:svg="http://www.w3.org/2000/svg"
                       xmlns="http://www.w3.org/2000/svg"
                       xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                       xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                       sodipodi:docname="logoCDMX.svg"
                       inkscape:version="1.0 (4035a4fb49, 2020-05-01)"
                       id="svg8"
                       version="1.1"
                       viewBox="0 3 39.485664 32.33133"
                       height="32.331333mm"
                       width="39.485664mm">
                      <defs
                         id="defs2">
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath34">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path32" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath50">
                          <path
                             d="m 0,512.96002 h 770.71997 v 12.95996 H 0 Z"
                             clip-rule="evenodd"
                             id="path48" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath60">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path58" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath88">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path86" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath936">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path934" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath984">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path982" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath1032">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path1030" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath1148">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path1146" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath1196">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path1194" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath1244">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path1242" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath1268">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path1266" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath1304">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path1302" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath1324">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path1322" />
                        </clipPath>
                        <clipPath
                           clipPathUnits="userSpaceOnUse"
                           id="clipPath1352">
                          <path
                             d="M 0,85.120003 V 541.12 H 810.56 V 85.120003 Z"
                             clip-rule="evenodd"
                             id="path1350" />
                        </clipPath>
                      </defs>
                      <sodipodi:namedview
                         inkscape:window-maximized="1"
                         inkscape:window-y="-9"
                         inkscape:window-x="-9"
                         inkscape:window-height="871"
                         inkscape:window-width="1440"
                         fit-margin-left="3"
                         fit-margin-bottom="3"
                         fit-margin-right="3"
                         fit-margin-top="3"
                         showgrid="false"
                         inkscape:document-rotation="0"
                         inkscape:current-layer="layer1"
                         inkscape:document-units="mm"
                         inkscape:cy="74.078316"
                         inkscape:cx="-17.043953"
                         inkscape:zoom="1.979899"
                         inkscape:pageshadow="2"
                         inkscape:pageopacity="0.0"
                         borderopacity="1.0"
                         bordercolor="#666666"
                         pagecolor="#ffffff"
                         id="base" />
                      <metadata
                         id="metadata5">
                        <rdf:RDF>
                          <cc:Work
                             rdf:about="">
                            <dc:format>image/svg+xml</dc:format>
                            <dc:type
                               rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                            <dc:title></dc:title>
                          </cc:Work>
                        </rdf:RDF>
                      </metadata>
                      <g
                         transform="translate(-218.73648,-89.078087)"
                         id="layer1"
                         inkscape:groupmode="layer"
                         inkscape:label="Capa 1">
                        <g
                           transform="translate(105.57146,10.423512)"
                           id="g3014">
                          <g
                             id="g2900">
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,139.91401,94.518236)"
                               id="g1042">
                              <path
                                 id="path1044"
                                 style="fill:#10ae4b;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="M 0,0 C 0.32,0.64 0.96,0.8 1.6,0.8 2.56,0.8 3.04,0 3.04,0 l 15.519999,-20 c 1.280001,-1.280001 2.560002,-0.16 2.560002,-0.16 1.279999,1.280001 0.32,2.4 0.32,2.4 L 18.08,-13.28 v 0 c -0.32,0.32 -0.639999,0.8 -0.639999,1.12 0,0.48 0.159999,0.96 0.479999,1.12 v 0 L 21.440001,-6.56 32.48,-20.48 28,-26.08 27.200001,-27.200001 C 26.559999,-28.16 24.959999,-28.48 24.959999,-28.48 H 18.24 c -1.600001,0 -2.56,1.279999 -2.56,1.279999 L -2.88,-3.52 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,139.70235,91.300903)"
                               id="g1046">
                              <path
                                 id="path1048"
                                 style="fill:#10ae4b;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="M 0,0 -4.32,-5.6 C -5.28,-7.04 -4,-8 -4,-8 c 1.76,-0.96 2.72,0.48 2.72,0.48 l 3.52,4.64 4.32,-5.6 -4.96,-6.4 c -1.12,-1.6 -2.88,-1.44 -2.88,-1.44 h -6.08 c -1.76,0 -2.72,1.28 -2.72,1.28 L -15.2,-8.48 -4.32,5.6 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,144.23201,92.613241)"
                               id="g1050">
                              <path
                                 id="path1052"
                                 style="fill:#10ae4b;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 c 0,0 -0.64,-0.8 -1.6,-0.8 -0.96,0 -1.44,0.64 -1.44,0.64 L -18.719999,20 c -1.120001,1.440001 -2.560002,0.32 -2.560002,0.32 -1.279998,-1.279999 -0.16,-2.56 -0.16,-2.56 L -17.92,13.28 v 0 c 0.16,-0.32 0.479999,-0.8 0.479999,-1.28 0,-0.32 -0.159999,-0.8 -0.479999,-1.12 v 0 L -21.440001,6.56 -32.48,20.639999 -26.24,28.48 h 9.600001 L 2.88,3.68 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,144.44368,95.788241)"
                               id="g1054">
                              <path
                                 id="path1056"
                                 style="fill:#10ae4b;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="M 0,0 4.32,5.76 C 5.44,7.2 4.16,8.32 4.16,8.32 2.4,9.44 1.44,7.68 1.44,7.68 l -3.84,-4.8 -4.32,5.6 6.24,8 h 9.6 L 15.36,8.64 4.32,-5.44 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,148.46535,92.401569)"
                               id="g1058">
                              <path
                                 id="path1060"
                                 style="fill:#10ae4b;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="M 0,0 C -2.4,0 -4.48,2.08 -4.48,4.48 -4.48,6.88 -2.4,8.8 0,8.8 2.4,8.8 4.48,6.88 4.48,4.48 4.48,2.08 2.4,0 0,0 Z m 0,6.88 c -1.28,0 -2.4,-1.12 -2.4,-2.4 0,-1.28 1.12,-2.4 2.4,-2.4 1.28,0 2.4,1.12 2.4,2.4 0,1.28 -1.12,2.4 -2.4,2.4 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,142.07301,86.982908)"
                               id="g1062">
                              <path
                                 id="path1064"
                                 style="fill:#10ae4b;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="M 0,0 C 2.4,0 4.48,-1.92 4.48,-4.32 4.48,-6.72 2.4,-8.8 0,-8.8 c -2.4,0 -4.48,2.08 -4.48,4.48 C -4.48,-1.92 -2.4,0 0,0 Z m 0,-6.72 c 1.28,0 2.4,1.12 2.4,2.4 0,1.28 -1.12,2.4 -2.4,2.4 -1.28,0 -2.4,-1.12 -2.4,-2.4 0,-1.28 1.12,-2.4 2.4,-2.4 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,136.82368,93.586905)"
                               id="g1066">
                              <path
                                 id="path1068"
                                 style="fill:#10ae4b;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 c 0,-2.56 -1.92,-4.48 -4.48,-4.48 -2.4,0 -4.48,1.92 -4.48,4.48 0,2.4 2.08,4.32 4.48,4.32 C -1.92,4.32 0,2.4 0,0 Z m -6.72,0 c 0,-1.28 0.96,-2.4 2.24,-2.4 1.28,0 2.4,1.12 2.4,2.4 0,1.28 -1.12,2.24 -2.4,2.24 -1.28,0 -2.24,-0.96 -2.24,-2.24 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,142.07301,100.14857)"
                               id="g1070">
                              <path
                                 id="path1072"
                                 style="fill:#10ae4b;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="M 0,0 C -2.4,0 -4.48,1.92 -4.48,4.48 -4.48,6.88 -2.4,8.8 0,8.8 2.4,8.8 4.48,6.88 4.48,4.48 4.48,1.92 2.4,0 0,0 Z m 0,6.72 c -1.28,0 -2.4,-0.96 -2.4,-2.24 0,-1.44 1.12,-2.4 2.4,-2.4 1.28,0 2.4,0.96 2.4,2.4 0,1.28 -1.12,2.24 -2.4,2.24 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,129.41535,86.136239)"
                               id="g1074">
                              <path
                                 id="path1076"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 v 32.959999 c 0,4 -1.28,7.68 -3.68,10.880001 -2.08,2.720001 -4.8,5.119999 -8.48,7.200001 C -17.6,54.240002 -23.040001,55.84 -24.32,56.16 -25.6,55.84 -31.040001,54.400002 -36.48,51.200001 -40,48.959999 -42.880001,46.560001 -44.959999,44 c -2.400002,-3.360001 -3.68,-7.040001 -3.68,-11.040001 V 0 Z m 1.28,-1.12 h -51.199998 v 34.079999 c 0,18.720001 25.599998,24.48 25.599998,24.48 v 0 c 0,0 25.6,-5.759999 25.6,-24.48 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,124.63168,88.718575)"
                               id="g1078">
                              <path
                                 id="path1080"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 v -3.2 h -3.2 v 3.04 H -4.48 V -3.2 h -3.36 v 3.04 H -9.12 V -3.2 h -3.2 V 0 l 1.6,2.72 c 0,0.16 0,0.16 0,0.32 v 14.400001 h 1.6 V 12.32 c 0,-1.28 1.28,-2.4 2.88,-2.4 1.44,0 2.88,1.12 2.88,2.4 v 5.120001 h 1.6 L -1.76,12 c 0,0 0,0 0,-0.16 V 9.28 c 0,-0.16 0,-0.16 0,-0.16 V 7.2 c 0,0 0,0 0,0 V 6.4 3.04 c 0,-0.16 0,-0.16 0.16,-0.32 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,121.45668,93.417569)"
                               id="g1082">
                              <path
                                 id="path1084"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 v -4.8 l -0.48,0.32 c -0.32,0.16 -0.48,0.16 -0.8,0 l -0.64,-0.48 c 0,0 0,0.16 0,0.16 v 1.76 c 0,0.16 -0.16,0.32 -0.16,0.48 0,0 0,0.16 0.16,0.16 0.8,0.64 0.8,1.6 0.64,2.4 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,122.98068,91.681903)"
                               id="g1086">
                              <path
                                 id="path1088"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="M 0,0 C -0.96,0 -1.6,0.64 -1.6,1.12 V 6.24 H 1.6 V 1.12 C 1.6,0.64 0.96,0 0,0 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,117.90068,93.417569)"
                               id="g1090">
                              <path
                                 id="path1092"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 c -0.16,-0.32 -0.32,-0.8 -0.48,-1.44 -0.16,-0.96 0,-1.92 0,-1.92 0,-0.32 0.16,-0.48 0.32,-0.64 l 1.44,-0.32 -1.6,-1.12 C -0.48,-5.6 -0.48,-5.76 -0.48,-6.08 v -1.6 c 0,-0.32 0,-0.48 0.32,-0.64 l 0.64,-0.32 v -0.64 l -0.64,-0.16 c -0.16,-0.16 -0.32,-0.32 -0.32,-0.64 v -2.08 c 0,-0.32 0.16,-0.64 0.64,-0.64 h 1.92 c -0.16,-0.48 -0.16,-1.12 0,-1.76 0.16,-0.8 0.64,-1.6 0.8,-2.079999 v -0.640002 c 0,-0.16 0,-0.479999 0.16,-0.479999 0,-0.16 0.16,-0.32 0.48,-0.32 h 0.96 c 0.16,0 0.32,0 0.32,0.16 l 2.56,1.6 h 1.28 c 0.16,0 0.32,0 0.48,0.16 0,0.16 0.16,0.32 0.16,0.48 l -0.16,2.08 c 0,0.16 0,0.32 -0.16,0.32 h 0.8 c 0.16,0 0.32,0.16 0.32,0.32 l 0.48,0.32 0.16,-0.16 0.48,-0.96 c 0.16,-0.32 0.32,-0.48 0.64,-0.48 h 1.6 v -0.32 l -1.6,-2.720001 c 0,-0.16 0,-0.16 0,-0.319999 v -4 c 0,-0.32 0.16,-0.64 0.64,-0.64 h 13.6 c 0.32,0 0.639999,0.32 0.639999,0.64 v 4 c 0,0.159999 -0.16,0.159999 -0.16,0.319999 l -1.6,2.720001 v 0.32 h 1.6 c 0.32,0 0.480002,0.16 0.640002,0.48 l 0.479999,0.96 0.16,0.16 0.48,-0.32 c 0,-0.16 0.16,-0.32 0.319999,-0.32 h 0.800002 c 0,0 -0.16,-0.16 -0.16,-0.32 v -2.08 c -0.16,-0.16 0,-0.32 0.16,-0.48 0,-0.16 0.159999,-0.16 0.319999,-0.16 h 1.280001 l 2.559997,-1.6 c 0,-0.16 0.16,-0.16 0.32,-0.16 h 0.960003 c 0.32,0 0.48,0.16 0.48,0.32 0.159999,0 0.319999,0.319999 0.159999,0.479999 v 0.640002 c 0.16,0.479999 0.64,1.279999 0.8,2.079999 0.16,0.64 0.16,1.28 0,1.76 h 2.080002 c 0.319999,0 0.639999,0.32 0.639999,0.64 l -0.16,2.08 c 0,0.32 0,0.48 -0.32,0.64 l -0.479999,0.16 v 0.64 l 0.479999,0.32 c 0.32,0.16 0.32,0.32 0.32,0.64 v 1.6 c 0,0.32 0,0.48 -0.16,0.64 l -1.600002,1.12 1.440002,0.32 c 0.16,0.16 0.32,0.32 0.32,0.64 0,0 0.16,0.96 0,1.92 -0.16,0.64 -0.32,1.12 -0.479999,1.44 h 2.239997 c 0.16,0 0.16,0 0.16,0 V -24.32 H -2.24 V 0 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,125.01268,92.782569)"
                               id="g1094">
                              <path
                                 id="path1096"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="M 0,0 C 0.16,0 0.16,-0.16 0.32,-0.16 0.16,-0.32 0,-0.48 0,-0.64 V -2.4 c 0,0 0,-0.16 0,-0.16 l -0.64,0.48 c -0.32,0.16 -0.48,0.16 -0.8,0 L -1.92,-2.4 v 4.8 h 1.28 C -0.8,1.6 -0.8,0.64 0,0 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,127.25635,96.846575)"
                               id="g1098">
                              <path
                                 id="path1100"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 c -0.48,0 -0.64,-0.16 -0.64,-0.64 v -4 c 0,-0.32 -0.16,-0.8 -0.48,-0.96 -0.32,-0.32 -0.64,-0.64 -1.28,-0.48 -0.96,0 -1.6,0.64 -1.6,1.44 v 4 c 0,0.16 -0.16,0.32 -0.32,0.48 C -4.32,0 -4.48,0 -4.64,0 H -8.48 C -8.8,0 -9.12,-0.16 -9.12,-0.64 v -4 c 0,-0.32 -0.16,-0.8 -0.48,-0.96 -0.16,-0.32 -0.64,-0.64 -1.28,-0.48 -0.32,0 -0.8,0 -1.12,0.32 L -8.8,9.92 C -4.48,8 0.64,4.96 3.36,0 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,124.58935,99.598239)"
                               id="g1102">
                              <path
                                 id="path1104"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="M 0,0 -4.32,-22.08 H -7.84 L -12.16,0 c 0,0 0,0 0,0 3.04,1.28 5.44,1.92 6.08,2.08 C -5.44,1.92 -2.88,1.28 0,0 0,0 0,0 0,0 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,121.88002,95.322572)"
                               id="g1106">
                              <path
                                 id="path1108"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 c -0.32,-0.32 -0.64,-0.32 -1.12,-0.32 0,0 0,0 0,0 -0.64,0 -1.12,0.16 -1.28,0.48 -0.32,0.16 -0.48,0.64 -0.48,0.96 v 4 c 0,0.48 -0.32,0.64 -0.64,0.64 H -7.2 c -0.16,0 -0.32,0 -0.48,-0.16 C -7.84,5.44 -7.84,5.28 -7.84,5.12 v -4 c -0.16,-0.8 -0.64,-1.44 -1.6,-1.44 0,0 0,0 -0.16,0 -0.48,0 -0.96,0.16 -1.12,0.48 -0.32,0.16 -0.48,0.64 -0.48,0.96 v 4 c 0,0.48 -0.32,0.64 -0.64,0.64 h -3.52 c 2.88,4.96 8,8 12.32,9.92 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,128.65335,93.756241)"
                               id="g1110">
                              <path
                                 id="path1112"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 h -18.4 l 0.959999,4.64 c 0.32,-0.32 0.800002,-0.32 1.280001,-0.32 0.8,0 1.6,0.16 2.24,0.8 0.48,0.48 0.8,1.28 0.8,1.92 v 3.36 h 2.56 V 7.04 c 0,0 0,-0.16 0,-0.16 0.16,-1.44 1.28,-2.56 2.88,-2.56 0.8,0 1.6,0.16 2.08,0.8 0.64,0.48 0.96,1.28 0.96,1.92 v 3.36 h 3.36 C -0.48,8.64 0.16,6.4 0.16,4 V 0 c 0,0 0,0 -0.16,0 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,118.57802,96.507908)"
                               id="g1114">
                              <path
                                 id="path1116"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="M 0,0 V -3.36 C 0,-4 0.32,-4.8 0.8,-5.28 c 0.64,-0.64 1.44,-0.8 2.24,-0.8 1.44,0 2.72,1.12 2.88,2.56 0,0 0,0.16 0,0.16 V 0 h 2.4 v -3.36 c 0,-0.64 0.32,-1.44 0.96,-1.92 0.48,-0.64 1.28,-0.8 2.08,-0.8 0.48,0 0.96,0 1.28,0.32 L 13.6,-10.4 H -4.8 v 4 c 0,2.4 0.48,4.64 1.28,6.4 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,118.95902,93.078903)"
                               id="g1118">
                              <path
                                 id="path1120"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 h 0.96 c 0.16,0.16 0.16,0.32 0.16,0.48 0,0 0,0.16 0,0.16 0,0.32 0,0.48 0,0.64 H -2.56 C -3.04,0.96 -3.2,-0.48 -3.2,-1.6 l 1.44,-0.48 c 0.32,-0.16 0.48,-0.32 0.48,-0.64 v -0.64 c 0,-0.16 -0.16,-0.32 -0.32,-0.48 l -1.6,-1.28 v -0.96 l 0.48,-0.32 c 0.32,-0.16 0.32,-0.32 0.32,-0.64 v -1.28 c 0,-0.32 -0.16,-0.48 -0.32,-0.64 L -3.2,-9.12 v -1.12 h 1.6 l 0.8,1.28 v 1.76 l -0.64,1.76 c 0,0.16 0,0.32 0.16,0.48 0.16,0.16 0.32,0.32 0.48,0.32 h 0.48 c 0.32,0 0.64,-0.16 0.64,-0.48 0,-0.32 0.16,-1.12 0.32,-1.44 0.16,-0.32 0.64,-0.96 0.8,-1.28 0.32,-0.16 0.32,-0.64 0,-0.8 l -2.08,-2.56 c 0,-0.32 -0.16,-1.28 0,-1.76 0.16,-0.8 0.64,-1.6 0.8,-1.92 0,-0.16 0.16,-0.32 0,-0.48 v -0.16 h 0.16 l 2.56,1.6 c 0.16,0.16 0.16,0.16 0.32,0.16 H 4 l -0.16,0.96 -0.8,0.32 c -0.16,0 -0.32,0.32 -0.32,0.48 v 0.64 c 0,0.48 0.16,0.64 0.48,0.64 h 2.24 l 0.64,0.64 c 0.16,0.16 0.48,0.32 0.8,0 0,0 0.96,-0.8 0.96,-0.8 l 0.32,-0.8 h 1.28 v 2.4 c 0,0 -2.24,0.8 -2.4,0.8 -0.16,0.16 -0.32,0.8 -0.32,0.96 0,0.16 0,0.32 0.32,0.48 0,0 0.64,0.48 0.8,0.64 l 0.8,-0.64 h 0.8 v 2.08 L 8.64,-4.48 5.92,-6.24 C 5.76,-6.4 5.28,-6.4 5.12,-6.08 L 4.64,-5.6 c -0.16,0.32 -0.16,0.64 0.16,0.8 l 1.44,1.44 v 1.28 L 4.8,-1.44 c -0.32,0 -0.48,0.32 -0.48,0.48 v 0.32 C 4.32,-0.32 4.64,0 4.96,0 h 1.92 c 0.32,0.32 0.16,0.96 0,1.28 H 2.72 C 2.56,1.12 2.4,0.8 2.4,0.64 c 0,-0.16 0,-0.16 0,-0.32 0,-0.32 0,-0.8 0.16,-1.12 l 0.96,-1.12 c 0,-0.16 0.16,-0.32 0.16,-0.48 v -0.48 c 0,-0.32 -0.16,-0.48 -0.32,-0.64 -0.16,-0.16 -0.32,-0.16 -0.64,0 l -1.44,0.64 c -0.32,0 -0.48,0.32 -0.48,0.48 v 0.64 l -0.96,0.32 c -0.32,0 -0.48,0.32 -0.48,0.48 v 0.32 C -0.64,-0.32 -0.32,0 0,0 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,127.00235,93.078903)"
                               id="g1122">
                              <path
                                 id="path1124"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 h -0.96 c -0.16,0.16 -0.16,0.32 -0.16,0.48 0,0 0,0.16 0,0.16 0,0.32 0,0.48 0,0.64 H 2.56 C 3.04,0.96 3.2,-0.48 3.36,-1.6 L 1.76,-2.08 C 1.44,-2.24 1.28,-2.4 1.28,-2.72 v -0.64 c 0,-0.16 0.16,-0.32 0.32,-0.48 L 3.36,-5.12 V -6.08 L 2.72,-6.4 C 2.56,-6.56 2.4,-6.72 2.4,-7.04 v -1.28 c 0,-0.32 0.16,-0.48 0.32,-0.64 l 0.64,-0.16 v -1.12 H 1.6 l -0.8,1.28 v 1.76 l 0.64,1.76 c 0,0.16 0,0.32 -0.16,0.48 C 1.12,-4.8 0.96,-4.64 0.8,-4.64 H 0.32 c -0.32,0 -0.64,-0.16 -0.64,-0.48 0,-0.32 -0.16,-1.12 -0.32,-1.44 -0.16,-0.32 -0.48,-0.96 -0.8,-1.28 -0.32,-0.16 -0.16,-0.64 0,-0.8 l 2.08,-2.56 c 0.16,-0.32 0.16,-1.28 0,-1.76 -0.16,-0.8 -0.64,-1.6 -0.8,-1.92 0,-0.16 0,-0.32 0,-0.48 v -0.16 h -0.16 l -2.56,1.6 c -0.16,0.16 -0.16,0.16 -0.32,0.16 h -0.64 v 0.96 l 0.8,0.32 c 0.32,0 0.48,0.32 0.48,0.48 v 0.64 c 0,0.48 -0.32,0.64 -0.64,0.64 h -2.24 l -0.48,0.64 c -0.32,0.16 -0.64,0.32 -0.96,0 0,0 -0.96,-0.8 -0.96,-0.8 l -0.32,-0.8 h -1.28 v 2.4 c 0,0 2.24,0.8 2.56,0.8 0,0.16 0.16,0.8 0.16,0.96 0,0.16 0,0.32 -0.32,0.48 0,0 -0.64,0.48 -0.8,0.64 l -0.64,-0.64 h -0.96 v 2.08 l 0.8,0.48 2.72,-1.76 c 0.32,-0.16 0.64,-0.16 0.8,0.16 l 0.48,0.48 c 0.16,0.32 0.16,0.64 -0.16,0.8 l -1.44,1.44 v 1.28 l 1.44,0.64 c 0.32,0 0.48,0.32 0.48,0.48 v 0.32 C -4.32,-0.32 -4.64,0 -4.96,0 h -1.92 c -0.32,0.32 -0.16,0.96 0,1.28 h 4.16 C -2.56,1.12 -2.4,0.8 -2.4,0.64 c 0,-0.16 0,-0.16 0,-0.32 0,-0.32 0,-0.8 -0.16,-1.12 l -0.96,-1.12 c 0,-0.16 -0.16,-0.32 -0.16,-0.48 v -0.48 c 0,-0.32 0.16,-0.48 0.32,-0.64 0.16,-0.16 0.32,-0.16 0.64,0 l 1.6,0.64 c 0.16,0 0.32,0.32 0.32,0.48 l 0.16,0.64 0.8,0.32 c 0.32,0 0.48,0.32 0.48,0.48 v 0.32 C 0.64,-0.32 0.32,0 0,0 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,116.20735,105.94824)"
                               id="g1126">
                              <path
                                 id="path1128"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 v 0 c 0,-2.4 1.76,-4.48 4.32,-4.48 1.44,0 2.4,0.32 3.2,1.12 l -0.64,0.8 C 6.24,-3.2 5.6,-3.68 4.32,-3.68 c -1.92,0 -3.2,1.6 -3.2,3.52 V 0 c 0,1.92 1.28,3.52 3.36,3.52 0.96,0 1.92,-0.48 2.4,-0.96 V 0.48 H 4.32 v -0.8 H 7.84 V 3.04 C 7.04,3.68 5.92,4.32 4.48,4.32 1.76,4.32 0,2.4 0,0 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,119.12835,105.94824)"
                               id="g1130">
                              <path
                                 id="path1132"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 0,0 v 0 c 0,-2.4 1.76,-4.48 4.32,-4.48 2.56,0 4.32,2.08 4.32,4.32 V 0 C 8.64,2.24 6.88,4.32 4.32,4.32 1.76,4.32 0,2.24 0,0 Z m 7.68,0 v 0 c 0,-2.08 -1.44,-3.68 -3.36,-3.68 -1.92,0 -3.36,1.6 -3.36,3.52 V 0 c 0,1.92 1.44,3.52 3.36,3.52 1.92,0 3.36,-1.6 3.36,-3.52 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,122.34568,104.80524)"
                               id="g1134">
                              <path
                                 id="path1136"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="M 0,0 H 3.68 C 4.64,0 5.44,0.32 5.92,0.8 6.24,1.12 6.4,1.6 6.4,2.08 v 0 c 0,1.12 -0.64,1.76 -1.28,2.08 0.96,0.32 1.76,0.8 1.76,2.08 v 0 C 6.88,7.68 5.6,8.48 3.84,8.48 H 0 Z M 5.44,2.24 C 5.44,1.44 4.8,0.8 3.52,0.8 H 0.96 v 3.04 h 2.56 c 1.12,0 1.92,-0.64 1.92,-1.6 z M 3.68,4.64 H 0.96 v 3.04 h 2.88 c 1.28,0 2.08,-0.64 2.08,-1.6 v 0 C 5.92,5.12 5.12,4.64 3.68,4.64 Z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,22.60835,-0.60476014)"
                               id="g1138">
                              <path
                                 id="path1140"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="M 387.35999,398.39999 V 406.88 h 0.96002 v -8.48001 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,22.60835,-0.60476014)"
                               id="g1142">
                              <g
                                 clip-path="url(#clipPath1148)"
                                 id="g1144">
                                <g
                                   transform="translate(392.16,398.39999)"
                                   id="g1150">
                                  <path
                                     id="path1152"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="M 0,0 H 6.24 V 0.8 H 0.96 V 3.84 H 5.6 v 0.8 H 0.96 v 3.04 h 5.28 v 0.8 H 0 Z" />
                                </g>
                                <g
                                   transform="translate(401.60001,398.39999)"
                                   id="g1154">
                                  <path
                                     id="path1156"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="M 0,0 H 3.68 C 4.8,0 5.6,0.32 6.08,0.8 6.56,1.28 6.72,1.76 6.72,2.56 v 0 C 6.72,4 5.76,4.8 4.48,4.96 L 7.04,8.48 H 5.92 L 3.36,5.12 H 0.96 V 8.48 H 0 Z m 3.52,4.32 c 1.28,0 2.24,-0.64 2.24,-1.76 v 0 C 5.76,1.44 4.96,0.8 3.52,0.8 H 0.96 v 3.52 z" />
                                </g>
                                <g
                                   transform="translate(411.84,398.39999)"
                                   id="g1158">
                                  <path
                                     id="path1160"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="M 0,0 H 0.96 L 6.24,6.88 V 0 H 7.2 V 8.48 H 6.4 L 0.96,1.44 V 8.48 H 0 Z" />
                                </g>
                                <g
                                   transform="translate(422.56,402.72)"
                                   id="g1162">
                                  <path
                                     id="path1164"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="m 0,0 v 0 c 0,-2.4 1.76,-4.48 4.32,-4.48 2.56,0 4.32,2.08 4.32,4.32 V 0 C 8.64,2.24 6.88,4.32 4.32,4.32 1.76,4.32 0,2.24 0,0 Z m 7.68,0 v 0 c 0,-2.08 -1.44,-3.68 -3.36,-3.68 -1.92,0 -3.36,1.6 -3.36,3.52 V 0 c 0,1.92 1.44,3.52 3.36,3.52 1.92,0 3.36,-1.6 3.36,-3.52 z" />
                                </g>
                                <g
                                   transform="translate(439.20001,398.39999)"
                                   id="g1166">
                                  <path
                                     id="path1168"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="M 0,0 H 2.88 C 5.6,0 7.52,1.76 7.52,4.16 v 0.16 c 0,2.4 -1.92,4.16 -4.64,4.16 H 0 Z M 0.96,0.8 V 7.68 H 2.88 C 5.12,7.68 6.4,6.24 6.4,4.32 v 0 C 6.4,2.4 5.12,0.8 2.88,0.8 Z" />
                                </g>
                                <g
                                   transform="translate(449.76001,398.39999)"
                                   id="g1170">
                                  <path
                                     id="path1172"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="M 0,0 H 6.08 V 0.8 H 0.96 V 3.84 H 5.6 v 0.8 H 0.96 v 3.04 h 5.28 v 0.8 H 0 Z" />
                                </g>
                                <g
                                   id="g1174">
                                  <path
                                     id="path1176"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="m 463.67999,398.39999 h 0.96002 v 7.68 H 469.44 V 406.88 h -5.76001 z" />
                                </g>
                                <g
                                   transform="translate(475.35999,398.23999)"
                                   id="g1178">
                                  <path
                                     id="path1180"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="m 0,0 h 0.8 l 4,8.64 H 3.68 L 2.72,6.4 H -1.92 L -2.88,8.64 H -4 Z M 2.4,5.6 0.32,1.12 -1.6,5.6 Z" />
                                </g>
                                <g
                                   transform="translate(353.60001,417.28)"
                                   id="g1182">
                                  <path
                                     id="path1184"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="m 0,0 v 0 c 0,-2.4 1.92,-4.48 4.48,-4.48 1.6,0 2.56,0.64 3.36,1.44 L 6.72,-1.76 C 6.08,-2.24 5.28,-2.72 4.48,-2.72 3.04,-2.72 2.08,-1.44 2.08,0 v 0 c 0,1.44 0.96,2.72 2.4,2.72 0.96,0 1.6,-0.48 2.24,-0.96 L 8,2.88 C 7.04,3.84 6.08,4.48 4.48,4.48 1.92,4.48 0,2.56 0,0 Z" />
                                </g>
                              </g>
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,22.60835,-0.60476014)"
                               id="g1186">
                              <path
                                 id="path1188"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 363.04001,412.95999 v 8.64002 h 1.91998 v -8.64002 z" />
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,22.60835,-0.60476014)"
                               id="g1190">
                              <g
                                 clip-path="url(#clipPath1196)"
                                 id="g1192">
                                <g
                                   transform="translate(367.20001,417.92001)"
                                   id="g1198">
                                  <path
                                     id="path1200"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="M 0,0 V -4.96 H 1.76 V 0 c 0,1.28 0.8,2.08 1.92,2.08 C 4.8,2.08 5.44,1.28 5.44,0 V -4.96 H 7.36 V 0 C 7.36,2.56 5.92,3.84 3.68,3.84 1.28,3.84 0,2.56 0,0 Z" />
                                </g>
                                <g
                                   transform="translate(376.79999,412.95999)"
                                   id="g1202">
                                  <path
                                     id="path1204"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="m 0,0 h 3.2 c 2.72,0 4.64,1.92 4.64,4.32 v 0 c 0,2.4 -1.92,4.32 -4.64,4.32 H 0 Z m 3.2,6.88 c 1.6,0 2.56,-0.96 2.56,-2.56 v 0 C 5.76,2.88 4.8,1.76 3.2,1.76 H 1.76 v 5.12 z" />
                                </g>
                                <g
                                   transform="translate(388.79999,412.95999)"
                                   id="g1206">
                                  <path
                                     id="path1208"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="M 0,0 H 1.76 L 5.44,8.64 H 3.36 L 2.56,6.72 h -3.52 l -0.8,1.92 H -3.68 Z M 1.92,4.96 0.8,2.24 -0.32,4.96 Z" />
                                </g>
                                <g
                                   transform="translate(395.51999,412.95999)"
                                   id="g1210">
                                  <path
                                     id="path1212"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="m 0,0 h 3.36 c 2.72,0 4.48,1.92 4.48,4.32 v 0 c 0,2.4 -1.76,4.32 -4.48,4.32 H 0 Z m 3.36,6.88 c 1.44,0 2.56,-0.96 2.56,-2.56 v 0 C 5.92,2.88 4.8,1.76 3.36,1.76 H 1.92 v 5.12 z" />
                                </g>
                                <g
                                   transform="translate(408.79999,412.95999)"
                                   id="g1214">
                                  <path
                                     id="path1216"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="M 0,0 H 3.36 C 6.08,0 8,1.92 8,4.32 v 0 C 8,6.72 6.08,8.64 3.36,8.64 H 0 Z m 3.36,6.88 c 1.6,0 2.56,-0.96 2.56,-2.56 v 0 C 5.92,2.88 4.96,1.76 3.36,1.76 H 1.92 v 5.12 z" />
                                </g>
                                <g
                                   transform="translate(418.56,412.95999)"
                                   id="g1218">
                                  <path
                                     id="path1220"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="M 0,0 H 6.4 V 1.76 H 1.76 v 1.76 h 4.16 v 1.6 H 1.76 V 6.88 H 6.4 V 8.64 H 0 Z" />
                                </g>
                                <g
                                   transform="translate(430.39999,412.95999)"
                                   id="g1222">
                                  <path
                                     id="path1224"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="M 0,0 H 2.08 L 4.32,3.68 6.56,0 H 8.64 V 8.64 H 6.72 v -5.6 l -2.4,3.68 v 0 L 1.92,3.04 v 5.6 H 0 Z" />
                                </g>
                                <g
                                   transform="translate(441.28,412.95999)"
                                   id="g1226">
                                  <path
                                     id="path1228"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="M 0,0 H 6.4 V 1.76 H 1.92 v 1.76 h 4 v 1.6 h -4 V 6.88 H 6.56 V 8.64 H 0 Z m 3.52,-2.72 1.6,0.64 -1.6,1.44 H 2.24 Z" />
                                </g>
                                <g
                                   transform="translate(452,417.28)"
                                   id="g1230">
                                  <path
                                     id="path1232"
                                     style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                     d="m 0,0 -2.88,-4.32 h 2.24 l 1.76,2.88 1.76,-2.88 H 5.12 L 2.24,-0.16 5.12,4.32 H 3.04 L 1.12,1.44 -0.96,4.32 h -2.08 z" />
                                </g>
                              </g>
                            </g>
                            <g
                               transform="matrix(0.26458333,0,0,0.26458333,22.60835,-0.60476014)"
                               id="g1234">
                              <path
                                 id="path1236"
                                 style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                                 d="m 458.56,412.95999 v 8.64002 h 1.92001 v -8.64002 z" />
                            </g>
                          </g>
                          <g
                             id="g1246"
                             transform="matrix(0.26458333,0,0,0.26458333,144.90935,109.80057)">
                            <path
                               d="m 0,0 v 0 c 0,-2.4 1.92,-4.48 4.48,-4.48 1.6,0 2.56,0.64 3.36,1.44 L 6.72,-1.76 C 6.08,-2.24 5.44,-2.72 4.48,-2.72 3.04,-2.72 2.08,-1.44 2.08,0 v 0 c 0,1.44 0.96,2.72 2.4,2.72 0.96,0 1.6,-0.48 2.24,-0.96 L 8,2.88 C 7.04,3.84 6.08,4.48 4.48,4.48 1.92,4.48 0,2.56 0,0 Z"
                               style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                               id="path1248" />
                          </g>
                          <g
                             id="g1250"
                             transform="matrix(0.26458333,0,0,0.26458333,147.23768,109.80057)">
                            <path
                               d="M 0,0 V 0 C 0,-2.4 1.92,-4.48 4.64,-4.48 7.2,-4.48 9.12,-2.4 9.12,0 V 0 C 9.12,2.4 7.2,4.48 4.64,4.48 1.92,4.48 0,2.4 0,0 Z m 7.2,0 v 0 c 0,-1.44 -1.12,-2.72 -2.56,-2.72 -1.6,0 -2.56,1.28 -2.56,2.72 v 0 c 0,1.44 0.96,2.72 2.56,2.72 C 6.08,2.72 7.2,1.44 7.2,0 Z"
                               style="fill:#898d8d;fill-opacity:1;fill-rule:nonzero;stroke:none"
                               id="path1252" />
                          </g>
                        </g>
                      </g>
                    </svg>


                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://www.semovi.cdmx.gob.mx/" class="underline text-gray-900 dark:text-white">SEMOVI</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   Programa de Desarrollo para Alta de Dictamenes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
