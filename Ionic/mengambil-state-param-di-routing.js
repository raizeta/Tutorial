.config(function($stateProvider,$urlRouterProvider,$ionicConfigProvider) {

  $ionicConfigProvider.tabs.position('bottom');
  $ionicConfigProvider.navBar.alignTitle('center');
  $stateProvider

  // setup an abstract state for the tabs directive
    .state('tab', {
    url: '/tab',
    abstract: true,
    templateUrl: 'templates/tabs.html'
  })

  .state('tab.chats', 
  {
      url: '/chats',
      views: {
        'tab-chats': {
          templateUrl: 'templates/tab-chats.html',
          controller: 'ChatsCtrl'
        }
      }
    })
    .state('tab.chat-detail', 
    {
      url: '/chats/:chatId',
      views: 
      {
        'tab-chats': 
        {
          templateUrl: function($stateParams)
          {
            console.log($stateParams.chatId) //Cara Mengambil State Param Di Routing
            return 'templates/chat-detail.html'
          },
          controller: 'ChatDetailCtrl'
        }
      }
    })
    
  $urlRouterProvider.otherwise('/tab/dash');

});