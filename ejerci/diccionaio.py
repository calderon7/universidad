# Estudiante_Construccion = {
#     "buc20371009": "Jhonnatan Calderon",
#     "buc19372014": "Emanuel Gomez",
#     "buc190372012": "Adriana Aguilar",
#     "buc19372019": "Myriam Moreno"
# }

def singleton(cls):
    instance = dict()
    def wrap(*arg, **kwarg):
        if cls not in instance:
            instance[cls]=cls(*arg, **kwarg)
            print ('Nueva instancia')
        return instance[cls]
    return wrap

@singleton
class User(object):
    def __init__(self, username):
        self.username = username

if __name__ == "__main__":
    use1 = User('ing')
    user2 = User('Sw')
    print(use1 is user2)
