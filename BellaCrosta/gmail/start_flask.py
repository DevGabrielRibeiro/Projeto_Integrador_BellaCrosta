#!/usr/bin/env python3
"""
Script auxiliar para iniciar o servidor Flask de forma silenciosa
"""
import subprocess
import sys
import os

def start_flask():
    """Inicia o servidor Flask em modo silencioso"""
    script_dir = os.path.dirname(os.path.abspath(__file__))
    app_path = os.path.join(script_dir, 'app.py')
    
    try:
        # Inicia o Flask em background
        if os.name == 'nt':  # Windows
            subprocess.Popen([
                sys.executable, app_path, '--silent'
            ], creationflags=subprocess.CREATE_NO_WINDOW)
        else:  # Linux/Mac
            subprocess.Popen([
                sys.executable, app_path, '--silent'
            ], stdout=subprocess.DEVNULL, stderr=subprocess.DEVNULL)
        
        return True
    except Exception as e:
        print(f"Erro ao iniciar Flask: {e}")
        return False

if __name__ == '__main__':
    start_flask()