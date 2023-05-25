# class User(object):
#     __instance = None
    
#     def __new__(cls):
#         if User.__instance is None:
#             print ('Nueva instancia')
#             User.__instance = object.__new__(cls)
#         return User.__instance
    
# if __name__ == '__main__':
#     user1 = User()
#     user2 = User()
    # print (user1 is user2)
    
def singletons(cls):
    instances = dict()
    def wrap(*arg, **kwarg):
        if cls not in instances:
            instances[cls] = cls(*arg, **kwarg)
            print('Nueva instancia')
        return instances[cls]
    return wrap
@singletons
class User(object):
    def __init__(self, username):
        self.username = username
        
if __name__ == '__main__':
    user1 = User('ing', 'software1')
    user2 = User('Software','software2')
    print(user1 is user2)