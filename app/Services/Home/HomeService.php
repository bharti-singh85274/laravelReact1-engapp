<?php

namespace App\Services\Home;

class HomeService
{
    protected StatsService $statsService;
    protected ContinueLearningService $continueLearningService;
    protected RecommendationService $recommendationService;
    protected GoalService $goalService;
    protected AchievementService $achievementService;
    protected ActivityService $activityService;



public function __construct(
    StatsService $statsService,
    ContinueLearningService $continueLearningService,
    RecommendationService $recommendationService,
    GoalService $goalService,
    AchievementService $achievementService,
    ActivityService $activityService
) {
    $this->statsService = $statsService;
    $this->continueLearningService = $continueLearningService;
    $this->recommendationService = $recommendationService;
    $this->goalService = $goalService;
    $this->achievementService = $achievementService;
    $this->activityService = $activityService;
}




    public function getDashboard($user): array
    {
        return [

            'user' => [
                'name' => $user->name,
                'email' => $user->email,
            ],

            'stats' => $this->statsService->getStats($user),

            'daily_goal' => $this->goalService->getDailyGoal($user),

            'continue_learning' => $this->continueLearningService->getContinueLearning($user),

            'recommendations' => $this->recommendationService->getRecommendations($user),

            'achievements' => $this->achievementService->getAchievements($user),

            'recent_activity' => $this->activityService->getRecentActivity($user),

        ];
    }
}