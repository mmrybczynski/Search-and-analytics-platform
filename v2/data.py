# Importuj moduł sys
import sys

# Przeczytaj dane z pliku
searchName = sys.argv[1]
phrases = sys.argv[2]
sumowanie = sys.argv[3]

# Wyszukaj nazwę w pliku
if searchName in phrases:
    # Znalezione
    print("Nazwa została znaleziona!")
else:
    # Nie znalezione
    print("Nazwa nie została znaleziona.")