from car import Car
from account import Account

if __name__ == "__main__":
    print("Hi world")

    car = Car("AMS234", Account("Andres Camelo", "ANDA897"))
    print(vars(car))
    print(vars(car.driver))