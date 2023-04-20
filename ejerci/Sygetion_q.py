class User(object):
    __instance = None
    
    def __new__(cls):
        if User.__instance is None:
            print ('Nueva instancia')
            User.__instance = object.__new__(cls)
        return User.__instance
    
if __name__ == "__main__":
    user1 = User()
    user2 = User()
    print (user1 is user2)
