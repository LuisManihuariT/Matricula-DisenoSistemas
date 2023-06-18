#include <iostream>
#include <vector>
#include <string>
#include <regex>

enum class Visibility {
    Public,
    Private
};

enum class Role {
    Variable,
    Function
};

struct Symbol {
    std::string name;
    std::string type;
    std::string scope;
    Visibility visibility;
    Role role;
};

int main() {


    std::string code = R"(
    	
    	char var = 20;
        int globalVar = 10;

        void function() {
            int localVar = 5;
        }

        int main() {
            char localVar = 'A';
            double localVar2 = 2.71;
            string cadena = "TEAM-SUSTI";
            return 0;
        }
    )";

    std::vector<Symbol> symbolTable;

    // Expresiones regulares para identificar sÃ­mbolos
    std::regex variableRegex(R"(\b([a-zA-Z_][a-zA-Z0-9_]*)\b\s*=\s*(.*?)(;|\n))");
    std::regex functionRegex(R"(\b([a-zA-Z_][a-zA-Z0-9_]*)\b\s*\(\s*\)\s*)");

    // AnÃ¡lisis lÃ©xico
    std::smatch match;
    std::string::const_iterator searchStart(code.cbegin());
    while (std::regex_search(searchStart, code.cend(), match, variableRegex)) {
        Symbol symbol;
        symbol.name = match[1].str();
        symbol.type = match[2].str();
        symbol.role = Role::Variable;

        symbolTable.push_back(symbol);

        searchStart = match.suffix().first;
    }

    searchStart = code.cbegin();
    while (std::regex_search(searchStart, code.cend(), match, functionRegex)) {
        Symbol symbol;
        symbol.name = match[1].str();
        symbol.type = "void";
        symbol.role = Role::Function;

        symbolTable.push_back(symbol);

        searchStart = match.suffix().first;
    }

    // AnÃ¡lisis sintÃ¡ctico para determinar el Ã¡mbito y la visibilidad
    std::string currentScope = "global";
    Visibility currentVisibility = Visibility::Public;

    for (auto& symbol : symbolTable) {
        if (symbol.role == Role::Function) {
            currentScope = symbol.name;
        } else {
            symbol.scope = currentScope;
            symbol.visibility = currentVisibility;
        }
    }

    // Mostrar la tabla de sÃ­mbolos
    std::cout << "Tabla de sÃ­mbolos de salida:\n";
    std::cout << "-----------------------------\n";
    std::cout << "Nombre    | Tipo   | Ãmbito    | Visibilidad | Rol      \n";
    std::cout << "------------------------------------------------\n";

    for (const auto& symbol : symbolTable) {
        std::cout << symbol.name << " | " << symbol.type << " | " << symbol.scope << " | ";
        std::cout << (symbol.visibility == Visibility::Public ? "Public" : "Private") << " | ";
        std::cout << (symbol.role == Role::Variable ? "Variable" : "Function") << "\n";
    }

    return 0;
}
