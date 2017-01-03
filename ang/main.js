var app = angular.module('frameApp', []);

//Used for ng-bind-html
app.filter('trustedhtml',
    function ($sce) {
        return $sce.trustAsHtml;
    }
);

app.controller('AppCardController', ['$scope', function AppCardController($scope) {
    $scope.apps = [
        {
            id: 'projects',
            cards: [
                {
                    image: 'heroimage.jpg',
                    title: 'Material Glass',
                    desc: 'The first Android theme created for Android 5.0.',
                    full: [
                        'Running since Lollipop and still going with Marshmallow.',
                        'Supports over 60 overlays in both CM and RRO, and comes with over 200 icons.',
                        'Also contains a full app UI with online wallpapers',
                        'Over 500 000 downloads!'
                    ],
                    links: [
                        ['Github-CM', 'https://github.com/PitchedApps/Material-Glass'],
                        ['Github-OMS', 'https://github.com/PitchedApps/Material-Glass-Substratum'],
                        ['Play Store', 'https://play.google.com/store/apps/details?id=com.pitchedapps.material.glass.free']
                    ]
                },
                {
                    image: 'frost_banner.jpg',
                    title: 'Frost for Facebook',
                    desc: 'A comprehensive third party Facebook app, made with design and functionality in mind.',
                    full: [
                        'Fully themeable',
                        'Battery friendly',
                        'Uses the graph API'
                    ],
                    links: [
                        ['Github', 'https://github.com/AllanWang/Facebook-Frost'],
                        ['Play Store', 'https://play.google.com/store/apps/details?id=com.pitchedapps.facebook.frost']
                    ]
                }
            ]
        },
        {
            id: 'libraries',
            cards: [
                {
                    image: 'icon_showcase.jpg',
                    title: 'Icon Showcase',
                    desc: 'An extensive UI library for icon packs.',
                    full: ['Also contains a request tool, a preview viewpager, a wallpaper chooser, and more.',
                        'Created with Jahir Fiquitiva'
                    ],
                    links: [['Github', 'https://github.com/jahirfiquitiva/IconShowcase']]
                },
                {
                    image: 'capsule.jpg',
                    title: 'Capsule',
                    desc: 'An android UI framework library for heavy designs.',
                    full: [
                        'Built around the coordinator layout view',
                        'Supports easy FAB and permission handling with EventBus',
                        'Comes with many useful util methods'
                    ], links: [['Github', 'https://github.com/AllanWang/Capsule']]
                }
            ]
        },
        {
            id: 'allanbots',
            cards: [
                {
                    image: 'allanbot_banner.jpg',
                    title: 'Allanbot',
                    desc: 'An extensive Facebook chatbot with Firebase integration.',
                    full: [
                        'General chatbot through pandorabots',
                        'Supports reminders and notifications',
                        'Can change chat colors, chat title, and chat nicknames',
                        'For a full list of features, message "@allanbot help"'
                    ],
                    links: [
                        ['Github', 'https://github.com/AllanWang/AllanBot-Public'],
                        ['Facebook Account', 'https://www.facebook.com/profile.php?id=100004410158491&fref=ts']
                    ]
                },
                {
                    image: 'allanbot_official_banner.jpg',
                    title: 'AllanBot Official',
                    desc: 'New bot, new features; uses the official messenger SDK',
                    full: ['Currently built to scrape for McGill lecture recordings.'],
                    links: [['Chat', 'https://m.me/theallanbot']]

                }
            ]
        }
    ];
    $scope.getId = function (title) {
        return title.replace(/ /g, '-').toLowerCase();
    };
    $scope.fullText = function (card) {
        var text = "";
        card.full.forEach(function (entry) {
            text += "&bull; " + entry + "<br>";
        });
        return text;
    };
    // $scope.filter('fullText', function () {
    //     return function (card) {
    //         return card.fullText(function (item) {
    //             return item;
    //         }).join(',');
    //     }
    // })
}]);
