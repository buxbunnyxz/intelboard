#!/bin/bash

# Description: This script automatically stages, commits, and pushes changes to GitHub.
# It runs in an infinite loop and executes every 2 seconds.

while true; do
    # Stage all changes
    git add .
    
    # Commit changes with a message
    git commit -m "Auto-commit on save"
    
    # Push changes to the remote repository
    git push
    
    # Wait for 2 seconds before running the loop again
    sleep 2
done