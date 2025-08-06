#!/usr/bin/env python3
"""
Script para verificar e instalar dependências necessárias
"""
import subprocess
import sys
import importlib

def check_and_install_package(package_name):
    """Verifica se um pacote está instalado e instala se necessário"""
    try:
        importlib.import_module(package_name)
        print(f"✓ {package_name} já está instalado")
        return True
    except ImportError:
        print(f"✗ {package_name} não encontrado. Instalando...")
        try:
            subprocess.check_call([sys.executable, '-m', 'pip', 'install', package_name])
            print(f"✓ {package_name} instalado com sucesso")
            return True
        except subprocess.CalledProcessError:
            print(f"✗ Erro ao instalar {package_name}")
            return False

def main():
    """Verifica todas as dependências necessárias"""
    print("Verificando dependências do sistema de email...")
    
    dependencies = ['flask']
    all_ok = True
    
    for dep in dependencies:
        if not check_and_install_package(dep):
            all_ok = False
    
    if all_ok:
        print("\n✓ Todas as dependências estão instaladas!")
        print("O sistema de email está pronto para uso.")
    else:
        print("\n✗ Algumas dependências falharam na instalação.")
        print("Execute manualmente: pip install flask")
    
    return all_ok

if __name__ == '__main__':
    main()