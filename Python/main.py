from car import Car
from account import Account
from driver import Driver
from uberX import UberX

if __name__ == "__main__":
    print("Hi world")

    uberX = UberX("AMS234", Driver("Andres Camelo", "ANDA897", "andrescamelo@yahoo.ca"), "Chevrolet", "Spark")
    print(vars(uberX))
    print(vars(uberX.driver))

    driver = Driver("Aniceto Molina", "ANIM162", "animoli@gmoli.com")
    print(vars(driver))