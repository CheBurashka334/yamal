var svg = 	'<svg>'+
			'<symbol id="menu" viewBox="0 0 612 612">'+
			'<path d="M0,95.625v38.25h612v-38.25H0z M0,325.125h612v-38.25H0V325.125z M0,516.375h612v-38.25H0V516.375z"/>'+
			'</symbol>'+
			'<symbol id="magnifying-glass" viewBox="0 0 483.083 483.083">'+
			'<path d="M332.74,315.35c30.883-33.433,50.15-78.2,50.15-127.5C382.89,84.433,298.74,0,195.04,0S7.19,84.433,7.19,187.85 S91.34,375.7,195.04,375.7c42.217,0,81.033-13.883,112.483-37.4l139.683,139.683c3.4,3.4,7.65,5.1,11.9,5.1s8.783-1.7,11.9-5.1 c6.517-6.517,6.517-17.283,0-24.083L332.74,315.35z M41.19,187.85C41.19,103.133,110.04,34,195.04,34 c84.717,0,153.85,68.85,153.85,153.85S280.04,341.7,195.04,341.7S41.19,272.567,41.19,187.85z"/>'+
			'</symbol>'+
			'<symbol id="lock" viewBox="0 0 429.233 429.233">'+
			'<path d="M323.515,180.128v-71.232C323.515,48.851,274.664,0,214.619,0S105.724,48.851,105.724,108.895 v71.232H38.877v249.105h351.478V180.128H323.515z M117.658,108.895c0-53.463,43.498-96.962,96.962-96.962 s96.962,43.498,96.962,96.962v71.232H117.658C117.658,180.128,117.658,108.895,117.658,108.895z M378.428,417.299H50.811V192.062 h54.907h217.791h54.913v225.237H378.428z"/>'+
			'</symbol>'+
			'<symbol id="location" viewBox="0 0 32 32">'+
			'<path d="M23.07,2.929c-3.906-3.906-10.234-3.906-14.141,0c-3.906,3.904-3.906,10.238,0,14.141 c0,0,7.066,6.93,7.066,14.93c0-8,7.074-14.93,7.074-14.93C26.977,13.168,26.977,6.833,23.07,2.929z M15.996,14.005 c-2.207,0-3.996-1.789-3.996-4s1.789-4,3.996-4c2.215,0,4.004,1.789,4.004,4S18.211,14.005,15.996,14.005z"/>'+
			'</symbol>'+
			'<symbol id="vk" viewBox="0 0 31.334 31.334">'+
			'<path d="M30.109,24.707c-0.167,0.021-0.335,0.047-0.503,0.048c-1.647,0.003-3.294-0.001-4.94,0.005 c-0.229,0.001-0.423-0.084-0.593-0.221c-0.344-0.281-0.698-0.558-1.015-0.87c-0.824-0.817-1.627-1.657-2.445-2.482 c-0.255-0.257-0.527-0.494-0.795-0.737c-0.139-0.131-0.313-0.159-0.493-0.156c-0.241,0.006-0.44,0.115-0.535,0.338 c-0.087,0.202-0.159,0.421-0.182,0.637c-0.04,0.391-0.042,0.784-0.05,1.175c-0.009,0.438-0.022,0.879-0.145,1.305 c-0.055,0.188-0.133,0.379-0.23,0.549c-0.17,0.292-0.438,0.451-0.779,0.458c-1.438,0.033-2.877,0.054-4.313-0.04 c-0.266-0.02-0.511-0.104-0.748-0.221c-1.34-0.658-2.517-1.532-3.54-2.622c-1.245-1.325-2.375-2.746-3.505-4.167 c-1.521-1.916-2.836-3.966-4.018-6.104c-0.432-0.779-0.849-1.569-1.159-2.408c-0.153-0.414-0.153-0.829-0.038-1.246 c0.033-0.124,0.092-0.245,0.16-0.354C0.34,7.434,0.491,7.345,0.684,7.341C0.752,7.34,0.823,7.338,0.891,7.338 c1.494,0,2.986,0.006,4.479-0.005C5.665,7.331,5.891,7.43,6.089,7.63C6.457,7.998,6.743,8.427,7,8.873 c0.28,0.486,0.56,0.975,0.807,1.479c0.543,1.109,1.209,2.143,1.914,3.151c0.344,0.491,0.716,0.963,1.073,1.444 c0.166,0.224,0.396,0.309,0.661,0.316c0.258,0.009,0.363-0.096,0.373-0.354c0.003-0.062,0.002-0.123,0.002-0.185 c0-1.686,0-3.37-0.002-5.055c0-0.131,0-0.263-0.013-0.393c-0.03-0.301-0.189-0.477-0.487-0.535 c-0.135-0.026-0.273-0.038-0.41-0.056c-0.42-0.055-0.594-0.233-0.638-0.655c-0.065-0.637,0.24-1.134,0.837-1.357 c0.257-0.096,0.523-0.117,0.795-0.116c1.331,0.002,2.662,0,3.993,0.001c0.27,0,0.54-0.014,0.808,0.01 c0.281,0.027,0.565,0.064,0.838,0.144c0.582,0.168,0.919,0.564,0.985,1.174c0.017,0.146,0.021,0.292,0.021,0.438 c0.002,1.023,0.002,2.046,0.002,3.069c0,1.085-0.001,2.17,0.002,3.255c0,0.106,0.009,0.217,0.038,0.318 c0.095,0.329,0.453,0.438,0.754,0.231c0.887-0.611,1.469-1.462,1.917-2.409c0.414-0.875,0.771-1.777,1.16-2.664 c0.311-0.703,0.63-1.402,0.955-2.099c0.079-0.173,0.196-0.33,0.305-0.488c0.099-0.142,0.229-0.204,0.412-0.204 c1.933,0.006,3.862,0.005,5.794,0.003c0.473,0,0.848,0.192,1.143,0.551c0.104,0.128,0.147,0.278,0.174,0.443 c0.115,0.761-0.146,1.424-0.51,2.063c-0.345,0.604-0.755,1.161-1.201,1.69c-0.924,1.094-1.83,2.201-2.622,3.396 c-0.204,0.307-0.378,0.634-0.564,0.951c-0.137,0.232-0.119,0.455,0.053,0.662c0.349,0.42,0.687,0.852,1.054,1.253 c0.872,0.956,1.766,1.889,2.643,2.84c0.281,0.306,0.535,0.634,0.796,0.958c0.086,0.107,0.15,0.232,0.234,0.341 C31.751,23.33,30.935,24.598,30.109,24.707z"/>'+
			'</symbol>'+
			'<symbol id="fb" viewBox="0 0 430.113 430.114">'+
			'<path d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805 c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354 c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/>'+
			'</symbol>'+
			'<symbol id="act-bis" viewBox="0 0 60 60">'+
			'<path d="M34.044,46.088H10.902c-1.63,0-2.956-1.326-2.956-2.957V32.187c0-1.525,1.149-2.786,2.624-2.953 l0.968-10.964c0.061-0.693,0.655-1.236,1.353-1.236h3.308c0.708,0,1.291,0.531,1.354,1.235l0.966,10.946h2.188l5.815-5.753 c1.184-1.174,3.247-1.171,4.43,0.011l5.178,5.163C36.69,29.198,37,29.945,37,30.74v12.392C37,44.762,35.674,46.088,34.044,46.088z M10.902,30.215c-1.079,0-1.956,0.884-1.956,1.972v10.945c0,1.079,0.877,1.957,1.956,1.957h23.142c1.078,0,1.956-0.878,1.956-1.957 V30.74c0-0.528-0.205-1.023-0.578-1.396l-5.178-5.163c-0.805-0.804-2.212-0.808-3.02-0.008l-6.107,6.042h-3.515l-1.046-11.857 c-0.016-0.181-0.173-0.324-0.357-0.324H12.89c-0.184,0-0.34,0.142-0.356,0.323l-1.046,11.858H10.902z M32.395,42.581h-1.57 c-0.606,0-1.099-0.493-1.099-1.099v-7.601c0-0.605,0.493-1.098,1.099-1.098h1.57c0.605,0,1.098,0.493,1.098,1.098v7.601 C33.493,42.088,33,42.581,32.395,42.581z M30.824,33.783c-0.055,0-0.099,0.043-0.099,0.098v7.601c0,0.057,0.042,0.099,0.099,0.099 h1.57c0.057,0,0.098-0.042,0.098-0.099v-7.601c0-0.055-0.043-0.098-0.098-0.098H30.824z M26.92,42.581h-1.574 c-0.606,0-1.099-0.493-1.099-1.099v-7.601c0-0.605,0.493-1.098,1.099-1.098h1.574c0.605,0,1.098,0.493,1.098,1.098v7.601 C28.019,42.088,27.526,42.581,26.92,42.581z M25.347,33.783c-0.053,0-0.099,0.045-0.099,0.098v7.601 c0,0.055,0.043,0.099,0.099,0.099h1.574c0.055,0,0.098-0.043,0.098-0.099v-7.601c0-0.053-0.045-0.098-0.098-0.098H25.347z"/>'+
			'</symbol>'+
			'<symbol id="export" viewBox="0 0 60 60">'+
			'<path d="M40.665,13.797c-0.334-0.516-1.028-0.727-1.594-0.465l-3.098,1.43c-0.256,0.12-0.486,0.28-0.68,0.477 l-4.86,4.913L13.25,18.179c-0.474-0.057-0.945,0.117-1.267,0.445l-0.964,0.974c-0.356,0.36-0.513,0.872-0.418,1.368 c0.094,0.497,0.426,0.915,0.888,1.118l11.843,5.122l-2.907,2.821l-6.051,0.031c-0.407,0.002-0.791,0.279-1.085,0.572l-0.519,0.586 c-0.36,0.364-0.515,0.909-0.415,1.41c0.1,0.501,0.44,0.932,0.909,1.129l5.106,2.165l2.21,5.088c0.245,0.565,0.802,0.93,1.42,0.927 c0.409-0.002,0.793-0.163,1.081-0.455l0.53-0.529c0.287-0.292,0.451-0.678,0.449-1.089l-0.031-6.051l2.902-2.938l5.355,11.793 c0.082,0.18,0.298,0.48,0.847,0.478c0.842-0.004,2.228-0.77,2.497-0.924l0.108-0.083c0.332-0.336,0.49-0.798,0.433-1.271 l-2.149-17.161l4.863-4.913c0.198-0.2,0.357-0.432,0.471-0.686l1.395-3.107C40.929,14.605,40.898,14.156,40.665,13.797z M39.838,14.586l-1.397,3.111c-0.064,0.145-0.156,0.277-0.269,0.391l-5.205,5.258l2.209,17.641c0.018,0.146-0.023,0.289-0.112,0.402 c-0.543,0.302-1.481,0.74-1.922,0.754l-5.902-13.005l-4.215,4.264l0.033,6.465c0.001,0.145-0.061,0.28-0.16,0.381l-0.527,0.53 c-0.128,0.13-0.276,0.158-0.376,0.159c-0.172,0.001-0.394-0.083-0.498-0.322l-2.37-5.452l-5.476-2.313 c-0.166-0.07-0.281-0.211-0.317-0.388s0.017-0.353,0.146-0.483l0.516-0.641c0.102-0.103,0.242-0.278,0.382-0.279l6.465-0.033 l4.222-4.147l-13.171-5.767c-0.163-0.072-0.276-0.185-0.31-0.36c-0.034-0.176,0.019-0.336,0.146-0.464l0.966-0.969 c0.097-0.098,0.234-0.166,0.44-0.149l17.664,2.03l5.203-5.257c0.111-0.113,0.243-0.204,0.391-0.273l3.096-1.428 c0.13-0.059,0.263-0.012,0.336,0.099C39.874,14.415,39.879,14.497,39.838,14.586z"/>'+
			'</symbol>'+
			'<symbol id="farm" viewBox="0 0 60 60">'+
			'<path d="M20.442,29.191c-2.993,0-5.428,2.435-5.428,5.428s2.435,5.428,5.428,5.428s5.428-2.435,5.428-5.428 C25.87,31.626,23.435,29.191,20.442,29.191z M20.442,39.047c-2.441,0-4.428-1.986-4.428-4.428s1.986-4.428,4.428-4.428 s4.428,1.986,4.428,4.428C24.87,37.061,22.884,39.047,20.442,39.047z M48.055,35.429L48,35.303v-4.777 c0-1.856-1.132-2.462-1.781-2.525H42v-9h-1v9h-4.372l-3.687-12h-10.3c-2.031,0-3.465,1.701-3.525,1.773L19,17.912v8.686 c-3.812,0.684-6.715,4.017-6.715,8.022c0,4.498,3.659,8.157,8.157,8.157c3.67,0,6.78-2.437,7.801-5.777h7.713 c-0.007,0.116-0.018,0.231-0.018,0.349c0,2.993,2.435,5.428,5.428,5.428s5.428-2.435,5.428-5.428c0-0.31-0.032-0.611-0.082-0.907 C47.435,36.125,48.031,35.466,48.055,35.429z M20.442,41.777c-3.946,0-7.157-3.211-7.157-7.157s3.211-7.157,7.157-7.157 s7.157,3.211,7.157,7.157S24.388,41.777,20.442,41.777z M41.367,41.777c-2.442,0-4.428-1.986-4.428-4.428 c0-2.441,1.986-4.428,4.428-4.428c2.441,0,4.428,1.986,4.428,4.428C45.794,39.791,43.808,41.777,41.367,41.777z M47,34.977 c-0.091,0.104-0.35,0.267-0.581,0.401c-0.791-2.02-2.755-3.458-5.052-3.458c-2.73,0-4.99,2.028-5.367,4.655V36h-7.527 c0.077-0.45,0.126-0.909,0.126-1.38c0-4.498-3.659-8.157-8.157-8.157c-0.149,0-0.295,0.014-0.442,0.022v-8.198 C20.335,17.94,21.365,17,22.641,17h9.562l3.687,12L41,28.998V29h1v-0.002l4.158-0.002C46.245,29.009,47,29.158,47,30.525V34.977z" />'+
			'</symbol>'+
			'<symbol id="grants" viewBox="0 0 60 60">'+
			'<path d="M49,8h1v40h-1V8z M13,10v8h9v-8H13z M21,17h-7v-6h7V17z M40,24h-9v15h9V24z M39,38h-7V25h7V38z M27,10h13v1 H27V10z M27,17h13v1H27V17z M13,24h13v1H13V24z M13,31h13v1H13V31z M13,38h13v1H13V38z M13,45h27v1H13V45z M53,13v42H8V5h37v43h1V4 H7v52h46h1V13H53z"/>'+
			'</symbol>'+
			'<symbol id="individual" viewBox="0 0 60 60">'+
			'<path d="M21.965,24.394c0,2.179,0.773,4.387,2.121,6.057c1.415,1.753,3.261,2.718,5.198,2.718 c1.936,0,3.78-0.965,5.192-2.716c1.344-1.668,2.114-3.874,2.114-6.054v-1.951c1.429-4.538,0.899-8.369,0.434-9.426 c-0.001-0.001-0.001-0.003-0.002-0.004c-0.004-0.01-0.009-0.019-0.014-0.029c-0.003-0.005-0.005-0.01-0.008-0.015 c-0.005-0.008-0.01-0.016-0.015-0.024c-0.004-0.006-0.008-0.012-0.012-0.017c-0.004-0.006-0.01-0.012-0.014-0.018 c-0.006-0.007-0.011-0.014-0.017-0.02c-0.004-0.004-0.008-0.008-0.012-0.012c-0.007-0.007-0.014-0.015-0.022-0.021 c-0.003-0.003-0.007-0.006-0.01-0.009c-0.008-0.007-0.017-0.014-0.026-0.021c-0.004-0.003-0.007-0.005-0.011-0.008 c-0.009-0.007-0.018-0.013-0.027-0.018c-0.005-0.003-0.01-0.005-0.015-0.008c-0.009-0.005-0.017-0.01-0.026-0.014 c-0.006-0.003-0.012-0.006-0.019-0.008c-0.008-0.004-0.016-0.007-0.024-0.01c-0.007-0.003-0.015-0.005-0.022-0.007 c-0.008-0.002-0.015-0.005-0.023-0.007c-0.007-0.002-0.015-0.004-0.022-0.005c-0.008-0.002-0.016-0.004-0.024-0.005 c-0.007-0.001-0.014-0.002-0.02-0.003c-0.01-0.001-0.019-0.002-0.028-0.003c-0.006,0-0.012,0-0.017-0.001 c-0.011,0-0.021-0.001-0.032,0c-0.005,0-0.01,0.001-0.015,0.001c-0.011,0.001-0.022,0.002-0.034,0.003c-0.002,0-0.003,0-0.005,0 c-1.22,0.174-2.698-0.122-4.262-0.436c-2.623-0.527-5.333-1.069-7.452,0.442c-0.032-0.007-0.065-0.01-0.099-0.01 c-2.173,0-3.691,1.801-3.691,4.38c0,1.993,0.839,5.713,0.958,6.231V24.394z M33.719,29.841c-1.223,1.518-2.798,2.354-4.434,2.354 c-1.637,0-3.214-0.837-4.441-2.356c-1.211-1.5-1.906-3.484-1.906-5.445v-0.554c0-1.733,0.983-4.074,1.317-4.82 c3.362-0.395,6.04,0,7.711,0.408c1.465,0.358,2.427,0.787,2.773,0.955l0.878,2.088v1.927C35.618,26.36,34.926,28.344,33.719,29.841 L33.719,29.841z M24.699,13.703c0.047,0,0.092-0.007,0.135-0.02c0.143,0.041,0.302,0.017,0.429-0.08 c1.787-1.357,4.333-0.846,6.795-0.351c1.292,0.259,2.527,0.507,3.668,0.507c0.176,0,0.349-0.007,0.52-0.019 c0.299,1.08,0.583,3.803-0.233,7.158l-0.445-1.058c-0.042-0.101-0.118-0.184-0.213-0.237c-0.18-0.099-4.478-2.419-11.49-1.517 c-0.001,0-0.002,0.001-0.004,0.001c-0.009,0.001-0.018,0.003-0.027,0.005c-0.007,0.001-0.014,0.002-0.021,0.004 c-0.006,0.001-0.011,0.003-0.017,0.005c-0.062,0.017-0.118,0.046-0.167,0.084c-0.031,0.024-0.06,0.052-0.085,0.084 c-0.001,0.001-0.002,0.002-0.002,0.003c-0.005,0.007-0.01,0.014-0.015,0.021c-0.004,0.006-0.009,0.012-0.013,0.019 c-0.003,0.005-0.006,0.01-0.009,0.015c-0.005,0.009-0.01,0.018-0.015,0.028c0,0.001-0.001,0.002-0.001,0.003 c-0.037,0.078-0.588,1.228-1.017,2.634c-0.242-1.286-0.491-2.856-0.491-3.882C21.981,14.757,23.346,13.703,24.699,13.703 L24.699,13.703z M24.699,13.703 M41.968,44.485H16.664c-1.349,0-2.447-1.016-2.447-2.265v-1.207c0-1.146,0.361-2.308,1.018-3.269 c0.723-1.06,1.734-1.796,2.924-2.129l3.744-0.786l0.932-1.413c0.275-0.369,0.64-0.579,1.036-0.627 c0.399-0.047,0.803,0.071,1.11,0.322l4.335,3.731l4.316-3.715c0.331-0.27,0.732-0.384,1.129-0.338 c0.396,0.048,0.761,0.259,1.001,0.578l0.966,1.462l3.681,0.77c1.253,0.348,2.264,1.084,2.988,2.145 c0.656,0.961,1.018,2.122,1.018,3.269v1.207C44.415,43.469,43.317,44.485,41.968,44.485z M30.773,43.485v0.5l0.002-0.5l11.192,0 c0.798,0,1.447-0.567,1.447-1.265v-1.207c0-0.948-0.3-1.908-0.844-2.705c-0.589-0.863-1.408-1.461-2.367-1.729l-4.083-0.854 l-1.158-1.756c-0.076-0.102-0.194-0.17-0.321-0.185c-0.161,0-0.272,0.035-0.357,0.104l-4.968,4.276l-4.969-4.277 c-0.084-0.069-0.191-0.106-0.301-0.106c-0.183,0.019-0.3,0.086-0.378,0.19l-1.157,1.755l-4.083,0.854 c-0.959,0.269-1.778,0.867-2.367,1.729c-0.544,0.797-0.844,1.757-0.844,2.705v1.207c0,0.697,0.649,1.265,1.447,1.265H30.773z M32.225,41.074l-3.258-3.212l0.698-0.716l2.464,2.418l3.742-4.832l0.791,0.612L32.225,41.074z M26.391,40.91l-4.238-5.568 l0.796-0.605l3.569,4.689l2.457-2.288l0.682,0.731L26.391,40.91z M42.942,42.22"/>'+
			'</symbol>'+
			'<symbol id="innovation" viewBox="0 0 60 60">'+
			'<path d="M44.402,21.683c-0.086-0.135-0.216-0.228-0.368-0.26c-0.319-0.069-0.66,0.154-0.721,0.427 c-0.05,0.187-0.186,0.639-0.489,1.227l-0.313,0.608l-8.768-8.764l0.614-0.312c0.726-0.368,1.224-0.478,1.229-0.479 c0.449-0.106,0.458-0.479,0.439-0.635c-0.035-0.314-0.301-0.643-0.734-0.536c-0.08,0.02-8.292,2.233-6.929,14.072l0.068,0.597 l-0.6-0.041c-0.557-0.039-1.113-0.056-1.656-0.056c-9.768,0-13.507,6.097-13.661,6.357c-0.122,0.206-0.135,0.396-0.038,0.566 c0.208,0.367,0.82,0.471,1.077,0.049c0.006-0.009,0.312-0.538,1.031-1.297l0.354-0.373l9.668,9.669l-0.373,0.354 c-0.713,0.677-1.234,0.996-1.291,1.03c-0.326,0.194-0.334,0.458-0.282,0.644c0.092,0.333,0.476,0.639,0.896,0.396 c0.282-0.169,7.037-4.347,6.297-15.318l-0.04-0.6l0.597,0.069c0.85,0.099,1.687,0.148,2.487,0.148c6.819,0,10.733-3.561,11.586-7.09 C44.518,21.984,44.49,21.821,44.402,21.683z M27.842,37.002c-0.833,2.463-1.796,3.75-2.171,4.189l-0.352,0.412l-9.482-9.515 l0.431-0.349c1.286-1.043,2.861-1.655,3.708-1.983c0.18-0.07,0.325-0.126,0.426-0.171l0.315-0.141l7.225,7.264L27.842,37.002z M28.479,34.276l-0.147,0.979l-6.145-6.148l0.979-0.148c1.535-0.232,3.275-0.279,4.993-0.138l0.422,0.035l0.035,0.421 C28.763,31.017,28.717,32.699,28.479,34.276z M34.65,27.956c-0.52,0.05-1.07,0.076-1.638,0.076c-0.941,0-1.938-0.069-2.964-0.206 l-0.378-0.05l-0.051-0.378c-0.226-1.661-0.273-3.218-0.145-4.628l0.098-1.064l6.131,6.15L34.65,27.956z M41.286,25.146 c-1.43,1.387-3.261,2.16-3.933,2.275l-0.254,0.044l-7.189-7.133l0.09-0.29c0.481-1.555,1.181-2.758,2.268-3.902l0.351-0.37 l9.045,8.912L41.286,25.146z"/>'+
			'</symbol>'+
			'<symbol id="investor" viewBox="0 0 60 60">'+
			'<path d="M34.396,43h-0.647l-3.506-23h-3.859L22.9,43h-0.67C21.448,43,21,43.635,21,44.417v0.167 C21,45.365,21.448,46,22.229,46h12.166C35.177,46,36,45.365,36,44.583v-0.167C36,43.635,35.177,43,34.396,43z M32.737,43h-7.131 l6.218-5.985L32.737,43z M31.691,36.139l-5.38-3.189l4.266-4.123L31.691,36.139z M30.356,27.38l-3.131-2.596l2.419-2.075 L30.356,27.38z M27.242,21h2.141l0.083,0.545l-2.651,2.273L27.242,21z M26.556,25.529l3.225,2.674l-4.253,4.111L26.556,25.529z M25.343,33.538l5.353,3.174L24.164,43H23.91L25.343,33.538z M35,44.583C35,44.814,34.813,45,34.583,45H22.417 C22.187,45,22,44.814,22,44.583v-0.167C22,44.186,22.187,44,22.417,44h12.166C34.813,44,35,44.186,35,44.417V44.583z M26.785,16.295 c0.154,0.184,0.263,0.318,0.353,0.438c0.094,0.125,0.176,0.246,0.251,0.367c0.069,0.115,0.12,0.214,0.158,0.317 c0.038,0.103,0.063,0.216,0.076,0.345c0.013,0.119,0.012,0.252,0,0.4c-0.014,0.154-0.038,0.293-0.056,0.39l-0.043,0.204 c-0.049,0.22,0.017,0.447,0.168,0.601c0.124,0.129,0.298,0.204,0.478,0.204l0.126-0.012c0.096-0.019,0.189-0.043,0.279-0.073 c0.21-0.068,0.415-0.167,0.605-0.29c0.252-0.159,0.478-0.362,0.672-0.603c0.235-0.291,0.418-0.637,0.529-1.003 c0.123-0.405,0.165-0.851,0.121-1.286c-0.039-0.412-0.157-0.843-0.342-1.248c-0.163-0.358-0.378-0.7-0.639-1.019 c-0.077-0.095-0.156-0.185-0.182-0.21l-0.167-0.181l0,0l-0.069-0.073l-0.092-0.1c-0.109-0.12-0.201-0.229-0.281-0.333 c-0.082-0.108-0.141-0.198-0.189-0.292c-0.049-0.093-0.085-0.196-0.109-0.316c-0.026-0.116-0.039-0.25-0.043-0.399 c-0.005-0.143,0.005-0.281,0.013-0.389l0.022-0.212c0.028-0.22-0.055-0.438-0.22-0.581c-0.121-0.105-0.275-0.164-0.436-0.164 L27.603,10.8c-0.099,0.025-0.198,0.06-0.296,0.1c-0.204,0.083-0.403,0.197-0.592,0.34c-0.241,0.183-0.451,0.407-0.624,0.666 c-0.213,0.317-0.363,0.688-0.436,1.072c-0.08,0.416-0.071,0.883,0.024,1.315c0.089,0.412,0.26,0.829,0.496,1.211 c0.123,0.195,0.241,0.359,0.353,0.491c0.115,0.14,0.151,0.179,0.158,0.186 M26.638,13.164c0.048-0.253,0.146-0.496,0.284-0.701 c0.111-0.167,0.245-0.311,0.396-0.425c0.023-0.018,0.047-0.035,0.07-0.051c-0.001,0.054-0.001,0.11,0.001,0.166 c0.006,0.219,0.028,0.416,0.064,0.579c0.041,0.203,0.109,0.395,0.201,0.571c0.072,0.139,0.158,0.273,0.28,0.434 c0.095,0.125,0.205,0.256,0.329,0.394c0.028,0.033,0.057,0.063,0.09,0.095c0.031,0.039,0.071,0.08,0.166,0.178l0.093,0.102 c0.028,0.028,0.082,0.091,0.136,0.157c0.205,0.252,0.375,0.521,0.502,0.801c0.139,0.304,0.228,0.625,0.257,0.93 c0.031,0.308,0.002,0.618-0.083,0.897c-0.074,0.244-0.195,0.474-0.35,0.665c-0.126,0.156-0.271,0.286-0.434,0.389 c-0.011,0.008-0.022,0.015-0.034,0.022c0.004-0.038,0.009-0.078,0.012-0.119c0.018-0.225,0.017-0.418-0.001-0.584 c-0.021-0.21-0.065-0.412-0.134-0.593c-0.058-0.155-0.134-0.311-0.243-0.49c-0.092-0.15-0.191-0.296-0.304-0.446 c-0.099-0.131-0.217-0.278-0.426-0.526l-0.215-0.252c-0.089-0.106-0.18-0.232-0.272-0.38c-0.175-0.284-0.303-0.593-0.368-0.896 C26.59,13.776,26.583,13.452,26.638,13.164z"/>'+
			'</symbol>'+
			'<symbol id="justice" viewBox="0 0 60 60">'+
			'<path d="M34.105,28c-0.272-2,1.367-6.233,2.063-7.686c0.499-1.033,0.759-2.174,0.777-3.383l0.006-0.082l-0.006-0.127 c-0.001-0.036-0.004-0.079-0.008-0.135l-0.021-0.499c-0.33-3.733-3.088-6.549-6.416-6.549c-1.776,0-3.493,0.845-4.717,2.324 c-0.088,0.106-0.175,0.212-0.248,0.313c-0.076,0.1-0.146,0.207-0.25,0.371c-0.807,1.254-1.234,2.731-1.234,4.271 c0,1.218,0.27,2.42,0.819,3.562l0.327,0.755C26.451,24.053,27.065,27,26.891,28H19v7h23v-7H34.105z M41,34H20v-5h7.688l0.099-0.391 c0.569-2.135-0.802-5.856-1.667-7.869l-0.387-0.876c-0.446-0.921-0.681-1.975-0.681-3.043c0-1.348,0.372-2.639,1.114-3.793 c0.053-0.082,0.105-0.167,0.174-0.257c0.067-0.094,0.14-0.181,0.219-0.276c1.043-1.261,2.443-1.956,3.942-1.956 c2.806,0,5.136,2.423,5.425,5.734l0.019,0.643c-0.014,1.052-0.242,2.042-0.677,2.943c-0.115,0.24-2.807,5.926-2.058,8.748L33.308,29 H41V34z M19,37h23v1H19V37z"/>'+
			'</symbol>'+
			'<symbol id="big" viewBox="0 0 60 60">'+
			'<path d="M17,11.937V44h11v-4.017l2.862-0.017L30.752,44H41V19.648L17,11.937z M40,43h-8.252l0.11-4.028L27,38.977V43 h-9V13.308l22,7.068V43z M38,21H20v4h18V21z M37,24H21v-2h16V24z M38,27H20v4h18V27z M37,30H21v-2h16V30z M38,33H20v4h18V33z M37,36 H21v-2h16V36z"/>'+
			'</symbol>'+
			'<symbol id="lease" viewBox="0 0 60 60">'+
			'<path d="M32,2.063V2h-1v0.016v1V30v1h1h19v-1H32V3.064c14.201,0.844,25.5,12.651,25.5,27.061 c0,14.957-12.168,27.125-27.125,27.125S3.25,45.082,3.25,30.125C3.25,16.658,13.117,5.457,26,3.358V2.342 C12.562,4.45,2.25,16.105,2.25,30.125c0,15.508,12.617,28.125,28.125,28.125S58.5,45.633,58.5,30.125 C58.5,15.163,46.753,2.909,32,2.063z"/>'+
			'</symbol>'+
			'<symbol id="mini" viewBox="0 0 60 60">'+
			'<path d="M18,33.115v11.124C18,44.79,17.784,45,18.335,45H31V35h4v10h3.827C39.378,45,40,44.79,40,44.239V33.115 l-10.993-11.19L18,33.115z M38.827,44.237C38.828,44.237,38.828,44.237,38.827,44.237v0.5V44.237z M39,44h-3V34h-6v10.237l-11,0.002 V33.531l10.007-10.196L39,33.531V44z M21,40h6v-6h-6V40z M22,35h4v4h-4V35z M38,25.881V16h-4v6.03l-5.292-4.974L13.966,31.189 l0.662,0.721l13.971-13.466L42.578,31.91l0.814-0.721L38,25.881z M35,17h2v7.918l-2-1.926V17z"/>'+
			'</symbol>'+
			'<symbol id="micro" viewBox="0 0 60 60">'+
			'<path d="M44.595,25.726l-0.613,0.789L29.5,15.274l-14.481,11.24l-0.613-0.789L29.5,14.009L44.595,25.726z M29.5,18.789L41,27.481V39h-8v-7h-7v7h-8V27.481L29.5,18.789z M40,27.981l-10.5-7.942L19,27.981V38h6v-7h9v7h6V27.981z"/>'+
			'</symbol>'+
			'<symbol id="microfinance" viewBox="0 0 52 54">'+
			'<path d="M36.404,21.411c-0.166-0.005-0.331-0.011-0.502-0.011c-0.102,0-0.203,0-0.299,0.005 c-0.267,0.005-0.534,0.016-0.802,0.032c-5.04,0.342-9.443,3.009-12.142,6.942c-0.893,1.299-1.603,2.742-2.084,4.281 c-0.086,0.267-0.16,0.54-0.23,0.812c-0.069,0.267-0.128,0.54-0.182,0.807c-0.208,1.026-0.315,2.09-0.315,3.175 c0,2.068,0.39,4.04,1.101,5.852c2.341,5.97,8.155,10.202,14.953,10.202c8.866,0,16.054-7.188,16.054-16.054 C51.962,28.76,45.041,21.679,36.404,21.411z M35.902,52.51c-6.375,0-11.827-3.969-14.022-9.567 c-0.667-1.699-1.032-3.548-1.032-5.488c0-1.017,0.1-2.015,0.296-2.977c0.05-0.251,0.105-0.506,0.17-0.757 c0.065-0.255,0.135-0.511,0.216-0.761c0.451-1.443,1.118-2.796,1.954-4.014c2.531-3.688,6.66-6.189,11.386-6.51 c0.251-0.015,0.501-0.025,0.752-0.03c0.09-0.005,0.185-0.005,0.281-0.005c0.16,0,0.316,0.005,0.471,0.01 c8.099,0.251,14.588,6.891,14.583,15.044C50.956,45.769,44.216,52.51,35.902,52.51z M17.425,10.283 c9.433,0,17.081-2.266,17.081-5.063c-0.001-0.275-0.077-0.546-0.223-0.811c-0.151-0.281-0.379-0.552-0.676-0.811 c-2.283-2.001-8.665-3.44-16.183-3.44S3.518,1.597,1.241,3.598c-0.298,0.26-0.525,0.53-0.676,0.811 C0.419,4.674,0.344,4.945,0.344,5.22C0.344,8.016,7.992,10.283,17.425,10.283z M1.565,4.571C1.707,4.346,1.92,4.13,2.2,3.922 C4.342,2.321,10.352,1.17,17.424,1.17c7.073,0,13.077,1.151,15.224,2.752c0.28,0.208,0.494,0.424,0.636,0.649 C33.422,4.783,33.493,5,33.493,5.22c0,2.238-7.195,4.051-16.069,4.051S1.356,7.458,1.356,5.22C1.356,4.999,1.427,4.783,1.565,4.571z M18.141,37.878c0-1.03,0.09-2.044,0.267-3.015l0.108-0.59l-1.261,0.005c-4.562,0-8.866-0.532-12.118-1.497 c-1.649-0.489-2.96-1.07-3.896-1.729c-0.134-0.094-0.258-0.189-0.378-0.284l-0.811-0.642v8.672c0,3.541,8.863,5.451,17.203,5.451 c0.474,0,0.944-0.005,1.408-0.016l0.693-0.016l-0.234-0.653C18.471,41.751,18.141,39.837,18.141,37.878z M17.255,43.249 c-9.549,0-16.203-2.346-16.203-4.451v-6.671c0.981,0.615,2.257,1.157,3.802,1.613c3.341,0.992,7.746,1.538,12.402,1.538h0.072 c-0.123,0.847-0.186,1.718-0.186,2.6c0,1.84,0.275,3.642,0.818,5.367C17.726,43.248,17.491,43.249,17.255,43.249z M23.094,24.92 c0.662-0.662,1.375-1.267,2.121-1.798l1.693-1.206l-2.057,0.304c-2.339,0.346-4.966,0.529-7.596,0.529 c-4.563,0-8.867-0.532-12.118-1.498c-1.651-0.49-2.962-1.071-3.895-1.728c-0.134-0.095-0.259-0.19-0.379-0.285l-0.811-0.642v8.64 c0,0.285,0.062,0.566,0.191,0.86c1.189,2.66,8.343,4.591,17.012,4.591c0.346,0,0.693-0.006,1.035-0.009l0.374-0.006l0.1-0.36 c0.192-0.692,0.431-1.37,0.709-2.019c0.312-0.741,0.679-1.461,1.094-2.143C21.265,26.986,22.115,25.899,23.094,24.92z M18.551,29.9 c-0.246,0.574-0.463,1.172-0.647,1.782c-0.215,0.003-0.432,0.005-0.649,0.005c-8.959,0-15.221-2.033-16.097-3.996 c-0.071-0.163-0.106-0.311-0.106-0.455v-6.639c0.98,0.614,2.256,1.155,3.8,1.613c3.341,0.993,7.746,1.539,12.403,1.539 c2.06,0,4.056-0.104,5.956-0.311c-0.283,0.248-0.558,0.507-0.825,0.774c-1.037,1.036-1.938,2.188-2.676,3.42 C19.271,28.353,18.881,29.117,18.551,29.9z M17.255,21.161c8.727,0,15.89-1.947,17.032-4.637c0.114-0.278,0.17-0.544,0.17-0.814 V7.654l-0.82,0.685c-0.114,0.095-0.232,0.185-0.368,0.276c-0.935,0.654-2.246,1.235-3.896,1.729 c-3.252,0.966-7.555,1.498-12.118,1.498S8.388,11.31,5.137,10.344c-1.65-0.489-2.961-1.07-3.895-1.728 c-0.134-0.095-0.259-0.19-0.379-0.285L0.052,7.689v8.021c0,0.273,0.058,0.548,0.172,0.82C1.365,19.213,8.528,21.161,17.255,21.161z M1.052,9.69c0.981,0.614,2.257,1.156,3.8,1.613c3.341,0.993,7.746,1.539,12.403,1.539c4.656,0,9.061-0.546,12.403-1.539 c1.547-0.463,2.824-1.006,3.8-1.614v6.023c0,0.136-0.03,0.279-0.092,0.428c-0.841,1.977-7.097,4.022-16.111,4.022 c-9.013,0-15.27-2.045-16.11-4.02c-0.062-0.147-0.093-0.292-0.093-0.431C1.052,15.711,1.052,9.69,1.052,9.69z M39.493,31.485 C38.506,30.78,37.51,31,36.017,31H33v7h-2v1h2v1h-2v1h2v4h1v-4h5v-1h-5v-1h2.017c1.549,0,2.563-0.457,3.478-1.163 c0.87-0.632,1.454-1.899,1.454-3.175S40.364,32.118,39.493,31.485z M38.911,36.996C38.213,37.51,37.487,38,36.035,38H34v-6h2.035 c1.452,0,2.178-0.187,2.875,0.327c0.596,0.449,0.998,1.043,0.998,2.015C39.908,35.278,39.497,36.556,38.911,36.996z"/>'+
			'</symbol>'+
			'<symbol id="young" viewBox="0 0 60 60">'+
			'<path d="M42.91,42.718H17.535c-1.275,0-2.312-1.033-2.312-2.303v-15.71c0-1.27,1.037-2.303,2.312-2.303h6.53v-2.674 c0-1.108,0.905-2.01,2.018-2.01h8.279c1.113,0,2.019,0.902,2.019,2.01v2.674h6.53c1.275,0,2.312,1.033,2.312,2.303v15.71 C45.222,41.685,44.185,42.718,42.91,42.718z M16.124,28.044v12.371c0,0.775,0.633,1.405,1.411,1.405H42.91 c0.778,0,1.411-0.63,1.411-1.405V28.031L32.3,32.3v2.668c0,0.248-0.202,0.449-0.451,0.449h-3.254c-0.249,0-0.451-0.201-0.451-0.449 v-2.667L16.124,28.044z M30.223,34.518h1.176V32.62l-1.023,0.363c-0.098,0.035-0.205,0.035-0.303,0l-1.026-0.363v1.898 C29.047,34.518,30.223,34.518,30.223,34.518z M16.124,27.091l14.1,4.993l14.097-5.006v-2.373c0-0.775-0.633-1.405-1.411-1.405 H17.535c-0.778,0-1.411,0.63-1.411,1.405V27.091z M24.966,22.402h10.513v-2.674c0-0.613-0.501-1.112-1.117-1.112h-8.279 c-0.616,0-1.117,0.499-1.117,1.112V22.402z"/>'+
			'</symbol>'+
			'<symbol id="starter" viewBox="0 0 60 60">'+
			'<path d="M25.479,28c0.725,0,1.313,0.28,1.313,0.625s-0.588,0.625-1.313,0.625s-1.313-0.28-1.313-0.625 S24.754,28,25.479,28z M15.004,41.391c0.257,0.1,4.579,1.733,10.482,1.733c3.038,0,6.514-0.513,10.514-1.749V41l0,0v-9l7.381-2.572 c0.515-0.215,0.643-0.529,0.65-0.755c0.017-0.489-0.458-0.768-0.662-0.866c-0.135-0.047-13.738-4.766-17.779-6.308 c-4.041,1.542-17.645,6.261-17.837,6.333c-0.147,0.074-0.625,0.352-0.609,0.841c0.008,0.226,0.079,0.54,0.594,0.755 C7.9,29.495,8.794,29.775,10,30.241v4.176c-1,0.194-1.667,1.035-1.667,2.041S9,38.305,10,38.499V40h1v-1.552 c1-0.254,1.5-1.045,1.5-1.99c0-0.945-0.5-1.736-1.5-1.99v-3.883c2.574,0.926,2.574,0.926,4,1.415l0,0v9 M11.594,36.458 c0,0.597-0.486,1.083-1.083,1.083s-1.083-0.486-1.083-1.083c0-0.598,0.486-1.083,1.083-1.083S11.594,35.861,11.594,36.458z M35,40.646c-9,2.887-17,0.673-19,0.041v-8.391c5,1.525,9.139,3.109,9.5,3.232c0.36-0.123,5.5-1.707,9.5-3.232V40.646z M25.593,34.518c-5.375-1.839-15.131-5.185-17.096-5.892c2.13-0.753,13.298-4.702,17.096-6.145 c3.829,1.455,15.152,5.458,17.101,6.143C40.742,29.328,30.973,32.678,25.593,34.518z"/>'+
			'</symbol>'+
			'<symbol id="navigator" viewBox="0 0 60 60">'+
			'<path d="M31.375,2C15.867,2,3.25,14.617,3.25,30.125S15.867,58.25,31.375,58.25S59.5,45.633,59.5,30.125 S46.883,2,31.375,2z M31.375,57.25C16.418,57.25,4.25,45.082,4.25,30.125S16.418,3,31.375,3S58.5,15.168,58.5,30.125 S46.332,57.25,31.375,57.25z M31,49h1v5h-1V49z M31,7h1v5h-1V7z M8,30h5v1H8V30z M49,30h5v1h-5V30z M28.726,28.879l-9.446,13.96 l13.941-9.64l0.052-0.078l9.446-13.961L28.778,28.8L28.726,28.879z M38.905,23.014l-6.187,9.144l-2.894-2.865L38.905,23.014z M31.984,32.839l-8.889,6.147l6.056-8.951L31.984,32.839z"/>'+
			'</symbol>'+
			'<symbol id="depart" viewBox="0 0 60 60">'+
			'<path d="M43.586,20.478c-0.389-0.388-1.066-0.389-1.457,0l-2.189,2.188c-0.19,0.191-0.521,0.192-0.713-0.001 l-1.604-1.604c-0.094-0.093-0.146-0.219-0.146-0.355s0.052-0.262,0.148-0.357l2.188-2.188c0.195-0.195,0.302-0.454,0.302-0.73 c0-0.275-0.108-0.533-0.302-0.726c-1.026-1.026-2.737-1.175-3.925-0.335l-1.189,0.839c-1.257,0.886-2.025,2.277-2.108,3.816 l-0.131,2.447L20.097,35.837c-1.201,1.202-1.201,3.156,0,4.357c0.582,0.582,1.356,0.902,2.179,0.902s1.597-0.32,2.179-0.902 L36.819,27.83l2.446-0.131c1.538-0.082,2.929-0.85,3.816-2.107l0.84-1.188C44.783,23.183,44.642,21.533,43.586,20.478z M43.139,23.772L42.298,25c-0.718,1.015-1.842,1.656-3.085,1.723l-2.813,0.159L23.777,39.511c-0.802,0.801-2.2,0.804-3.002,0.002 c-0.401-0.401-0.622-0.933-0.622-1.5c0-0.567,0.221-1.099,0.622-1.5l12.623-12.624l0.151-2.813c0.067-1.245,0.688-2.368,1.704-3.085 l1.189-0.839c0.357-0.252,0.707-0.385,1.142-0.385c0.561,0,1.417,0.218,1.417,0.615v0.101l-2.12,2.188 c-0.277,0.275-0.395,0.643-0.395,1.035c0,0.388,0.174,0.766,0.446,1.034l1.609,1.601c0.552,0.556,1.524,0.477,2.074-0.077L42.807,21 h0.102C43.633,22,43.73,22.935,43.139,23.772z M23.642,37.649c0,0.501-0.406,0.906-0.906,0.906c-0.501,0-0.907-0.406-0.907-0.906 c0-0.5,0.406-0.906,0.907-0.906C23.236,36.743,23.642,37.148,23.642,37.649z M19.801,28.717c-0.476,0.475-1.306,0.475-1.783,0 l-3.803-3.804c-0.238-0.239-0.37-0.555-0.369-0.892s0.131-0.653,0.37-0.891l2.773-2.772c-0.165-0.218-0.254-0.482-0.254-0.76 c0-0.337,0.132-0.653,0.371-0.891l1.604-1.605c0.435-0.434,1.171-0.478,1.651-0.114c0.311-0.284,0.692-0.468,1.108-0.534 l5.935-0.952c0.678-0.109,1.376,0.123,1.855,0.602l0.686,0.687c0.238,0.238,0.369,0.555,0.369,0.892 c0,0.336-0.131,0.653-0.369,0.891l-3.374,3.375l2.346,2.346l-0.677,0.677l-3.024-3.023l4.051-4.052c0.118-0.118,0.118-0.31,0-0.428 l-0.686-0.687c-0.265-0.265-0.653-0.396-1.026-0.332l-5.935,0.952c-0.248,0.039-0.473,0.154-0.651,0.332l-0.601,0.602l-0.554-0.556 c-0.056-0.055-0.132-0.087-0.213-0.087c-0.081,0-0.157,0.032-0.213,0.088l-1.605,1.606c-0.058,0.057-0.089,0.133-0.089,0.212 c0,0.081,0.031,0.157,0.089,0.214l0.553,0.555l-3.442,3.441c-0.057,0.057-0.088,0.132-0.088,0.212c0,0.081,0.031,0.157,0.088,0.214 l3.803,3.804c0.114,0.114,0.313,0.114,0.428,0l2.826-2.827l2.775,2.775l-0.677,0.677l-2.097-2.098L19.801,28.717z M39.823,36.106 l0.366,0.368l-4.633,4.603l-0.675-0.68l0,0l-3.929-3.929l0.681-0.674l3.927,3.927l3.276-3.255l-4.061-4.061l0.67-0.685l4.382,4.382 L39.823,36.106z"/>'+
			'</symbol>'+
			'<symbol id="support" viewBox="0 0 60 60">'+
			'<path d="M58.113,30.071c0-6.077-1.933-11.706-5.204-16.315l1.641-1.641l-5.657-5.656l-1.396,1.396 C42.749,4.196,36.819,2,30.375,2c-6.559,0-12.596,2.263-17.384,6.041l0.712,0.712C18.306,5.153,24.092,3,30.375,3 c6.168,0,11.847,2.087,16.408,5.568L36.75,18.602c-1.998-1.124-4.299-1.769-6.75-1.769c-2.371,0-4.593,0.616-6.545,1.673 L11.408,6.459l-5.657,5.656l1.719,1.719c-3.282,4.6-5.22,10.222-5.22,16.291c0,6.444,2.196,12.374,5.855,17.122l-2.354,2.354 l5.657,5.656l2.112-2.112c4.663,3.349,10.44,5.355,16.71,5.355c6.229,0,11.969-1.982,16.615-5.291l2.048,2.048l5.657-5.656 l-2.319-2.319C55.906,42.514,58.113,36.551,58.113,30.071z M57.113,30.071c0,6.203-2.098,11.915-5.596,16.496l-9.357-9.356 c1.057-1.951,1.673-4.174,1.673-6.545c0-2.271-0.56-4.409-1.534-6.302l9.892-9.891C55.287,18.894,57.113,24.271,57.113,30.071z M48.893,7.873l4.243,4.242L40.407,24.843l-4.242-4.242L48.893,7.873z M30,17.833c2.172,0,4.213,0.553,6.007,1.511L34.751,20.6 l5.656,5.656l1.144-1.144c0.813,1.683,1.282,3.563,1.282,5.554c0,2.091-0.527,4.053-1.419,5.798l-1.006-1.006l-5.656,5.656 l0.995,0.995C34.013,42.985,32.07,43.5,30,43.5c-1.991,0-3.87-0.469-5.553-1.282l1.103-1.103l-5.656-5.656l-1.215,1.215 c-0.959-1.794-1.511-3.835-1.511-6.007c0-2.07,0.516-4.014,1.39-5.746l1.336,1.336l5.656-5.656l-1.348-1.348 C25.947,18.36,27.909,17.833,30,17.833z M7.165,12.115l4.243-4.242l12.728,12.728l-4.242,4.242L7.165,12.115z M3.25,30.125 c0-5.793,1.831-11.163,4.937-15.574l9.624,9.623c-1.039,1.939-1.644,4.143-1.644,6.493c0,2.451,0.645,4.752,1.769,6.75l-9.117,9.117 C5.337,41.972,3.25,36.293,3.25,30.125z M11.408,53.843l-4.243-4.242l12.729-12.728l4.242,4.242L11.408,53.843z M30.23,57.553 c-6.004,0-11.54-1.908-16.021-5.097l9.49-9.49C25.591,43.94,27.729,44.5,30,44.5c2.349,0,4.554-0.604,6.492-1.643l9.663,9.663 C41.691,55.669,36.193,57.553,30.23,57.553z M53.136,49.601l-4.243,4.242L36.165,41.115l4.242-4.242L53.136,49.601z"/>'+
			'</symbol>'+
			'<symbol id="guarantee" viewBox="0 0 60 60">'+
			'<path d="M59.756,47.57c-0.071-0.042-7.209-4.235-17.648-5.608l-0.131,0.992c9.154,1.203,15.704,4.609,17.023,5.338 V53H39h-2H17v-4.709c1.316-0.73,7.818-4.135,16.568-5.338L34,42.893v-6.497c1.051,0.496,2.17,0.771,3.333,0.771 c5.974,0,10.834-7.065,10.834-15.75s-4.86-15.75-10.834-15.75S26.5,12.732,26.5,21.417c0,6.445,2.679,11.99,6.5,14.426v6.181 	c-9.759,1.432-16.686,5.504-16.756,5.546L16,47.716V54h21h2h21v-6.284L59.756,47.57z M27.5,21.417c0-8.133,4.411-14.75,9.833-14.75 c5.423,0,9.834,6.617,9.834,14.75s-4.411,14.75-9.834,14.75C31.911,36.167,27.5,29.55,27.5,21.417z M15.64,40.48L16,40.375v-4.146 c0.523,0.136,1.058,0.219,1.607,0.219c2.671,0,5.122-1.648,6.819-4.448h-1.193c-1.484,2.18-3.48,3.448-5.626,3.448 c-4.471,0-8.107-5.475-8.107-12.203s3.637-12.203,8.107-12.203c2.267,0,4.422,1.46,5.95,3.958h1.146 c-1.719-3.111-4.315-4.958-7.096-4.958c-5.021,0-9.107,5.923-9.107,13.203c0,5.966,2.746,11.015,6.5,12.645v3.738 c-2.07,0.634-12.051,3.854-13.947,7.649L1,47.382V54h10v-1H2v-5.377C4.036,43.902,15.523,40.514,15.64,40.48z"/>'+
			'</symbol>'+
			'<symbol id="soc-pred" viewBox="0 0 60 60">'+
			'<path d="M23.382,30.468l-0.211-0.64l-5.031,4.194l0.172,0.328c1.199,2.287,3.071,4.147,5.413,5.378l0.328,0.173 l4.178-5.009l-0.64-0.211C25.608,34.029,24.034,32.454,23.382,30.468z M23.828,38.741c-1.916-1.081-3.471-2.623-4.528-4.493 l3.447-2.874c0.76,1.764,2.177,3.183,3.939,3.942L23.828,38.741z M35.922,30.468c-0.653,1.986-2.226,3.561-4.208,4.213l-0.64,0.211 l4.177,5.008l0.328-0.172c2.34-1.227,4.212-3.087,5.414-5.378l0.172-0.328l-5.031-4.194L35.922,30.468z M40.005,34.247 c-1.059,1.873-2.614,3.416-4.528,4.494l-2.857-3.425c1.761-0.76,3.178-2.178,3.938-3.942L40.005,34.247z M23.382,26.345 c0.651-1.983,2.225-3.557,4.21-4.213l0.639-0.211l-4.177-5.009l-0.328,0.173c-2.342,1.233-4.214,3.093-5.413,5.378l-0.172,0.328 l5.031,4.195L23.382,26.345z M19.299,22.564c1.057-1.869,2.612-3.412,4.528-4.493l2.858,3.427c-1.763,0.761-3.18,2.18-3.939,3.941 L19.299,22.564z M29.679,12.506c-8.782,0-15.926,7.145-15.926,15.927c0,8.778,7.145,15.92,15.926,15.92 c8.778,0,15.92-7.142,15.92-15.92C45.599,19.65,38.457,12.506,29.679,12.506z M29.679,43.353c-8.23,0-14.926-6.693-14.926-14.92 c0-8.23,6.696-14.927,14.926-14.927c8.227,0,14.92,6.696,14.92,14.927C44.599,36.659,37.906,43.353,29.679,43.353z M35.922,26.345 	l0.211,0.64l5.031-4.19l-0.172-0.328c-1.198-2.288-3.07-4.149-5.413-5.383l-0.328-0.173l-4.177,5.013l0.64,0.211 	C33.698,22.787,35.271,24.361,35.922,26.345z M35.476,18.071c1.917,1.082,3.472,2.626,4.528,4.497l-3.447,2.871 	c-0.759-1.762-2.176-3.179-3.938-3.939L35.476,18.071z M33.561,28.437c0-2.24-1.822-4.062-4.062-4.062s-4.062,1.822-4.062,4.062 s1.822,4.062,4.062,4.062S33.561,30.676,33.561,28.437z M29.499,31.498c-1.688,0-3.062-1.374-3.062-3.062s1.374-3.062,3.062-3.062 s3.062,1.374,3.062,3.062S31.187,31.498,29.499,31.498z"/>'+
			'</symbol>'+
			'<symbol id="srednee" viewBox="0 0 60 60">'+
			'<path d="M16,40h5v-6h3v6h20V24H16V40z M17,25h26v14H25v-6h-5v6h-3V25z M39.444,15H20.995l-6.661,7h31.84L39.444,15z M21.424,16h17.594l4.808,5h-27.16L21.424,16z M25,27h-5v4h5V27z M24,30h-3v-2h3V30z M33,27h-5v4h5V27z M32,30h-3v-2h3V30z M33,33 h-5v4h5V33z M32,36h-3v-2h3V36z M41,31h-5v-4h5V31z M37,30h3v-2h-3V30z M41,37h-5v-4h5V37z M37,36h3v-2h-3V36z"/>'+
			'</symbol>'+
			'<symbol id="zaim" viewBox="0 0 60 60">'+
			'<path d="M30.375,3c-6.947,0-13.309,2.537-18.221,6.727L8.578,5.351L8.741,3.46c0.011-0.124-0.024-0.252-0.115-0.355 l-0.81-0.968L7.675,1.976L6.444,0.507c-0.081-0.112-0.209-0.188-0.353-0.2C5.82,0.284,5.583,0.483,5.56,0.751L5.426,2.307 L3.875,2.173c-0.124-0.01-0.251,0.029-0.353,0.114C3.312,2.46,3.29,2.772,3.463,2.976l2.182,2.593 c0.081,0.111,0.208,0.187,0.357,0.2l1.75,0.15l3.649,4.466c-5.62,5.146-9.151,12.538-9.151,20.74 c0,15.508,12.617,28.125,28.125,28.125S58.5,46.633,58.5,31.125S45.883,3,30.375,3z M7.636,4.926L6.284,4.81L4.966,3.249 l0.866,0.074C6.1,3.347,6.333,3.144,6.356,2.872l0.071-0.866L6.902,2.57L6.9,2.572L7.054,2.75l0.698,0.829L7.636,4.926z M30.375,58.25C15.418,58.25,3.25,46.082,3.25,31.125c0-7.891,3.389-15.003,8.785-19.964l4.754,5.818 C12.927,20.627,10.5,25.78,10.5,31.5c0,11.028,8.972,20,20,20s20-8.972,20-20c0-4.715-1.649-9.046-4.388-12.468l-0.64,0.812 C47.986,23.066,49.5,27.106,49.5,31.5c0,10.477-8.523,19-19,19s-19-8.523-19-19c0-5.408,2.283-10.284,5.921-13.747l4.864,5.952 c-2.323,2.169-3.785,5.247-3.785,8.668c0,6.547,5.326,11.874,11.873,11.874s11.874-5.327,11.874-11.874 c0-2.272-0.653-4.389-1.764-6.195l-0.659,0.837c0.901,1.583,1.424,3.409,1.424,5.358c0,5.996-4.878,10.874-10.874,10.874 c-5.995,0-10.873-4.878-10.873-10.874c0-3.109,1.319-5.909,3.417-7.893l4.577,5.601c-0.612,0.708-0.995,1.619-0.995,2.627 c0,2.229,1.813,4.042,4.042,4.042s4.041-1.814,4.041-4.042c0-2.228-1.812-4.041-4.041-4.041c-0.86,0-1.655,0.275-2.311,0.734 l-4.556-5.575c1.849-1.452,4.172-2.326,6.699-2.326c1.494,0,2.917,0.303,4.214,0.85l0.634-0.805 c-1.482-0.666-3.12-1.046-4.848-1.046c-2.768,0-5.311,0.96-7.332,2.553l-4.88-5.972c3.323-2.848,7.629-4.58,12.338-4.58 c3.553,0,6.87,0.998,9.717,2.703l0.622-0.79C37.818,12.577,34.287,11.5,30.5,11.5c-4.949,0-9.475,1.817-12.971,4.805l-4.743-5.805 C17.526,6.452,23.668,4,30.375,4C45.332,4,57.5,16.168,57.5,31.125C57.5,46.082,45.332,58.25,30.375,58.25z M30.448,33.695 l0.774-0.633l-2.359-2.887c0.482-0.32,1.058-0.508,1.679-0.508c1.677,0,3.041,1.364,3.041,3.041c0,1.678-1.364,3.042-3.041,3.042 c-1.678,0-3.042-1.364-3.042-3.042c0-0.695,0.243-1.328,0.637-1.841L30.448,33.695z"/>'+
			'</symbol>'+
			'</svg>';